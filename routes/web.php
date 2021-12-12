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
Route::get('/report', [\App\Http\Controllers\ReportController::class, 'test']);
Route::get('/view', [\App\Http\Controllers\ReportController::class, 'view']);
Route::get('/report2', [\App\Http\Controllers\ReportController::class, 'puppeteer']);
