<?php

use App\Http\Controllers\ConfirmedCasesController;
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
Route::get('/cases/confirmed/breakdown-by-district', [ConfirmedCasesController::class, 'showBreakdownByDistrict'])->name('breakdown-by-district');
Route::get('/cases/confirmed/breakdown-by-district/get-data', [ConfirmedCasesController::class, 'getBreakdownByDistrictData'])->name('get-breakdown-by-district-data');
Route::get('/cases/confirmed/breakdown-by-age', [ConfirmedCasesController::class, 'showBreakdownByAge'])->name('breakdown-by-age');
Route::get('/cases/confirmed/breakdown-by-age/get-data', [ConfirmedCasesController::class, 'getBreakdownByAgeData'])->name('get-breakdown-by-age-data');
Route::get('/deaths', [ConfirmedCasesController::class, 'showDeath'])->name('death');
Route::get('/deaths/get-data', [ConfirmedCasesController::class, 'getDeathData'])->name('get-death-data');
