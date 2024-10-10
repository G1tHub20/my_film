<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Artisan; //Artisanコマンドを実行するため

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('post', [UserController::class, 'post']);

// グループ化してまとめる場合（シンプルに書ける）
Route::prefix('movie') // 頭に movie をつける
	->middleware(['auth']) // 認証機能をつける
	->controller(MovieController::class) // コントローラ指定（Laravel9から）
	->name('movie.')
	->group(function() { //グループ化
		Route::get('/', 'index')->name('index'); //名前付きルート
		Route::get('/result', 'result')->name('result');
		// ----------管理者用------------------------------------
		Route::get('/admin', 'admin')->name('admin');
		Route::get('/getApiData', function (Illuminate\Http\Request $request) {
			$id = $request->query('tmdb_id'); // GETパラメータとしてIDを取得
			Artisan::call('command:tmdbapi_id', [
					'query' => $id,
			]);
					return response()->json(['message' => "ID {$id} のデータ取得コマンドを実行しました。"]);
		})->name('getApiData'); // ここで名前を付ける;

		// ------------------------------------------------------
		Route::get('/{id}', 'show')->name('show');
		Route::get('post/{id}', 'post')->name('post');
		Route::get('edit/{id}', 'edit')->name('edit');
		Route::post('store/{id}', 'store')->name('store');
		Route::post('update/{id}', 'update')->name('update'); //ユーザIDも指定すべき？
	});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('auth/login');
});







// TMDB API
// Route::get('/moviex', [MoviexController::class, 'search'])->name('movies.search');
// Route::get('/moviex/{id}', [MoviexController::class, 'show'])->name('movies.show');

require __DIR__.'/auth.php';
