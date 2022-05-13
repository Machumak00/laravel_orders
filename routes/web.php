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

Route::prefix('orders')->group(function () {
    Route::post('/', function () {
        // Matches The "/admin/users" URL
    });
    Route::put('/', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/', function () {
        // Matches The "/admin/users" URL
    });
});
