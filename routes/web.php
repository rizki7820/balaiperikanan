<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PusherController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/praktek', function () {
    return view('dashboard.praktek.index');
});

Route::controller(PetugasController::class)->group(function () {
    Route::get('/petugas', 'index');
});

Route::controller(PusherController::class)->group(function () {
    Route::get('/chat', 'index');
});


