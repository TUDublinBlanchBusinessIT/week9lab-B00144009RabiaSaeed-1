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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('courts', App\Http\Controllers\courtController::class);

Route::resource('bookings', App\Http\Controllers\bookingController::class);
Route::resource('members', App\Http\Controllers\memberController::class);
Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create'); 
Route::get('/loggedInMember','App\Http\Controllers\memberController@getLoggedInMemberDetails');
Route::get('/calender/display','App\Http\Controllers\calenderController@display');