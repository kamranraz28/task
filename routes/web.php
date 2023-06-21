<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\DataController;
use App\HTTP\Controllers\ShowController;

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
Route::get('/emplyee_login', function () {
    return view('login');
});

Route::get('/checkin', function () {
    return view('checkin');
});

Route::get('/checkout', function () {
    return view('checkout');
});



Route::get('/add_data', [DataController::class, 'data']);
Route::post('/add_data', [DataController::class, 'adddata']);

Route::get('/show', [ShowController::class, 'showData']);

Route::post('login', [DataController::class, 'logIn']);

