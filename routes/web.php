<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MoviexController;

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

Route::get('/', function () {
  return view('welcome');
});

Route::get('post', [UserController::class, 'post']);

Route::get('/moviex', [MoviexController::class, 'search'])->name('movies.search');

// Route::get('movies', [MovieController::class, 'index']);

// グループ化してまとめる場合（シンプルに書ける）
Route::prefix('movies') // 頭に contacts をつける
	->middleware(['auth']) // 認証機能をつける
	->controller(MovieController::class) // コントローラ指定（Laravel9から）
	->name('movies.')
	->group(function() { // グループ化
		Route::get('/', 'index')->name('index'); // 名前付きルート
		Route::get('/create', 'create')->name('create');
		Route::get('/result', 'result')->name('result');
	});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
