<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\PostController;

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


Route::controller(ThreadController::class)->name("thread.")->group(function () {
    Route::get('/', 'index')->name("index");
    Route::prefix("thread")->group(function () {
        Route::get('/{thread}', 'show')->name('show');
        Route::middleware(['auth'])->group(function () {
            Route::get('/create', 'add')->name("add");
            Route::post('/craete', 'create')->name("create");
        });     
    });
});

Route::post('/post', [PostController::class, "create"])->name('post.create');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
