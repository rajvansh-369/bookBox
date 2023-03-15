<?php

use App\Http\Controllers\BookBoxController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/box', [BookBoxController::class, 'box'])->name('box');
Route::post('/boxCreate', [BookBoxController::class, 'boxCreate'])->name('boxCreate');
Route::get('/book', [BookBoxController::class, 'book'])->name('book');
Route::post('/bookCreate', [BookBoxController::class, 'bookCreate'])->name('bookCreate');


Route::get('/showBox', [BookBoxController::class, 'showBox'])->name('showBox');
Route::get('/report', [BookBoxController::class, 'report'])->name('report');




Route::post('/putBox', [BookBoxController::class, 'putBox'])->name('putBox');


