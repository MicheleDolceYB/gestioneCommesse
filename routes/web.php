<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommesseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DependentController;
use App\Http\Controllers\StimaController;
use App\Http\Controllers\TimesheetController;

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

Route::resource('/client',ClientsController::class);

Route::resource('/commesse',CommesseController::class);

Route::resource('/project',ProjectController::class);

Route::resource('/activity',ActivityController::class);

Route::resource('/dependent',DependentController::class);

Route::resource('/stima',StimaController::class);

Route::resource('/timesheet',TimesheetController::class);





