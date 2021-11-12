<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

// User controller
use App\Http\Controllers\BookController;
use App\Http\Controllers\MyBookController;


// Admin\ Controller
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OngoingController;
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
Route::get('/book', [BookController::class, 'index'])->name('book');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.villa1');
Route::get('/book/order/step2', [BookController::class, 'secondStep'])->name('book.step2');
Route::post('/book/order/final', [BookController::class, 'finalStep'])->name('book.final');

// mybook
Route::get('/my-books', [MyBookController::class, 'index'])->name('mybook');

// admin
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>'admin'] ,function () {
    // Route::get('/dashboard', [BookController::class,'index'])->name('book');
    // Route::get('/order', [BookController::class,'index'])->name('book');

    
    Route::get('/history', [HistoryController::class,'index'])->name('history');
    
    // Ongoing
    Route::get('/ongoing', [OngoingController::class,'index'])->name('ongoing');
    Route::get('/ongoing/{id}', [OngoingController::class,'show'])->name('ongoing.show');
    Route::post('/ongoing/update/{id}', [OngoingController::class,'update'])->name('ongoing.update');

});