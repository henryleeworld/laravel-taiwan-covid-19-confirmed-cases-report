<?php

use App\Http\Controllers\ConfirmedCasesController;
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

Route::get('/cases/confirmed/breakdown-by-district', [ConfirmedCasesController::class, 'showBreakdownByDistrict'])->name('breakdown-by-district');
Route::get('/cases/confirmed/breakdown-by-district/get-data', [ConfirmedCasesController::class, 'getBreakdownByDistrictData'])->name('get-breakdown-by-district-data');
Route::get('/cases/confirmed/daily', [ConfirmedCasesController::class, 'showDaily'])->name('daily');
Route::get('/cases/confirmed/daily/get-data', [ConfirmedCasesController::class, 'getDailyData'])->name('get-daily-data');