<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/liste_velo', [App\Http\Controllers\VeloController::class, 'liste_velo'])->name('liste_velo')->middleware('auth');
Route::get('/ajouter_velo', [App\Http\Controllers\VeloController::class, 'ajouter_velo'])->name('ajouter_velo')->middleware('auth');
Route::post('/ajouter_velo', [App\Http\Controllers\VeloController::class, 'store'])->name('velos.store')->middleware('auth');
