<?php

use App\Http\Controllers\eventController;
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

Route::get('/', [eventController::class, 'index'])->name('index');
Route::get('/event/create', [eventController::class, 'create'])->name('create')->middleware('auth');
Route::post('/events', [eventController::class, 'store'])->name('store');
Route::get('/events/{id}', [eventController::class, 'show'])->name('show');
Route::get('/dashboard', [eventController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::delete('/events/{id}', [eventController::class, 'destroy'])->name('destroy')->middleware('auth');
Route::get('/events/edit/{id}', [eventController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/events/update/{id}', [eventController::class, 'update'])->name('update')->middleware('auth');