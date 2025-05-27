<?php

use App\Http\Controllers\Covid19Controller;
use Illuminate\Support\Facades\Route;

Route::get('/cases/confirmed/breakdown-by-district', [Covid19Controller::class, 'showBreakdownByDistrict'])->name('breakdown-by-district');
Route::get('/cases/confirmed/breakdown-by-district/get-data', [Covid19Controller::class, 'getBreakdownByDistrictData'])->name('get-breakdown-by-district-data');
Route::get('/cases/confirmed/breakdown-by-age', [Covid19Controller::class, 'showBreakdownByAge'])->name('breakdown-by-age');
Route::get('/cases/confirmed/breakdown-by-age/get-data', [Covid19Controller::class, 'getBreakdownByAgeData'])->name('get-breakdown-by-age-data');
Route::get('/deaths', [Covid19Controller::class, 'showDeath'])->name('death');
Route::get('/deaths/get-data', [Covid19Controller::class, 'getDeathData'])->name('get-death-data');
