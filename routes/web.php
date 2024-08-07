<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

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

// Route::get('test', function () {
//   return view('test');
// });

Route::get('post', [UserController::class, 'post']);

// グループ化してまとめる場合（シンプルに書ける）
Route::prefix('movies') // 頭に movies をつける
	->middleware(['auth']) // 認証機能をつける
	->controller(MovieController::class) // コントローラ指定（Laravel9から）
	->name('movies.')
	->group(function() { //グループ化
		Route::get('/', 'index')->name('index'); //名前付きルート
		Route::get('/create', 'create')->name('create');
		Route::get('/result', 'result')->name('result');
		Route::get('/{id}', 'show')->name('show');
		Route::get('post/{id}', 'post')->name('post');
		Route::get('edit/{id}', 'edit')->name('edit');
		Route::post('store/{id}', 'store')->name('store');
		Route::post('update/{id}', 'update')->name('update'); //ユーザIDも指定すべき？
	});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');







// TMDB API
// Route::get('/moviex', [MoviexController::class, 'search'])->name('movies.search');
// Route::get('/moviex/{id}', [MoviexController::class, 'show'])->name('movies.show');

require __DIR__.'/auth.php';
