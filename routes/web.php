<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SatkerController;
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

Route::get('chart', [ChartController::class, 'index']);
Route::get('bar-graph', [StudentController::class, 'index']);
Route::get('satker', [SatkerController::class, 'index']);
