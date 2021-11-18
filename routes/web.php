<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/maps', [MapsController::class, 'index'])->name('maps');
Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/about', [AboutController::class, 'index'])->name('about');
