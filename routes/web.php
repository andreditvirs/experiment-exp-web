<?php

use App\Http\Controllers\ExcelController;
use App\Http\Controllers\SqlController;
use App\Http\Controllers\IndonesiasController;
use App\Http\Controllers\ExperimentMailController;
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

Route::get('/excel', [ExcelController::class, 'get']);
Route::get('/sql', [SqlController::class, 'get']);
Route::get('/import_to_db', [IndonesiasController::class, 'import_to_db']);
Route::get('/send-mail',[ExperimentMailController::class, 'index']);
