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

Route::get('/cases/confirmed', [ConfirmedCasesController::class, 'index'])->name('home');
Route::get('/cases/confirmed/get-data', [ConfirmedCasesController::class, 'getData'])->name('get-data');