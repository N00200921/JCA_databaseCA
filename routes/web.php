<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Video_gamesController as UserVideo_gamesController;
use App\Http\Controllers\Admin\Video_gamesController as AdminVideo_gamesController; 


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



Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/user/video_games/',[UserVideo_gamesController::class, 'index'])->name('user.video_games.index');
Route::get('/user/video_games/{id}', [UserVideo_gamesController::class, 'show'])->name('user.video_games.show');

Route::get('/admin/video_games/', [AdminVideo_gamesController::class, 'index'])->name('admin.video_games.index');
Route::get('/admin/video_games/create', [AdminVideo_gamesController::class, 'create'])->name('admin.video_games.create');
Route::get('/admin/video_games/{id}', [AdminVideo_gamesController::class, 'show'])->name('admin.video_games.show');
Route::post('/admin/video_games/store', [AdminVideo_gamesController::class, 'store'])->name('admin.video_games.store');
Route::get('/admin/video_games/{id}edit', [AdminVideo_gamesController::class, 'edit'])->name('admin.video_games.edit');
Route::put('/admin/video_games/{id}', [AdminVideo_gamesController::class, 'update'])->name('admin.video_games.update');
Route::delete('/admin/video_games/{id}', [AdminVideo_gamesController::class, 'destroy'])->name('admin.video_games.destroy');