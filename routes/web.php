<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// book
Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('book');
Route::get('/book/{id}', [App\Http\Controllers\BookController::class, 'show'])->name('book.villa1');
Route::get('/book/{id}/2', [App\Http\Controllers\BookController::class, 'secondStep'])->name('book.villa1');
