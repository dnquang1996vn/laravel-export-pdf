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
Route::get('/pdf/purchase_order', [\App\Http\Controllers\ReportController::class, 'purchaseOrder']);
Route::get('/pdf/invoice', [\App\Http\Controllers\ReportController::class, 'invoice']);
Route::get('/pdf/manifest', [\App\Http\Controllers\ReportController::class, 'manifest']);
