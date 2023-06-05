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


Route::get('/', [App\Http\Controllers\CardetailsController::class, 'front_view']);

    Route::post('list_cars', 
    [App\Http\Controllers\CardetailsController::class, 'index']);
    Route::get('car_book_view/{id}', [CardetailsController::class, 'car_book_view'])->name('view.car_book_view');  
    Route::post('create_booking_detais', [CardetailsController::class, 'create_booking_detais']);
  
  
////auth//////////


Route::get('login', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('post-login', [App\Http\Controllers\AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration',  [App\Http\Controllers\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [App\Http\Controllers\AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [App\Http\Controllers\AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

////admin//////////
Route::get('create_new_car', [App\Http\Controllers\AdminController::class, 'create_new_car'])->name('create_new_car');
Route::post('post_new_car', [App\Http\Controllers\AdminController::class, 'post_new_car'])->name('post_new_car.post'); 
Route::get('list_car', [App\Http\Controllers\AdminController::class, 'list_car'])->name('list_car');
Route::resource('cars', App\Http\Controllers\AdminController::class);