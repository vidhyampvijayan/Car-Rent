<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardetailsController;

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
//     return view('welcome');
// });
Route::get('/', 
    [App\Http\Controllers\CardetailsController::class, 'front_view']);

    Route::post('list_cars', 
    [App\Http\Controllers\CardetailsController::class, 'index']);

    Route::get('car_book_view/{id}', [CardetailsController::class, 'car_book_view'])->name('view.car_book_view');
   
    Route::post('create_booking_detais', [CardetailsController::class, 'create_booking_detais']);
  
  

    