<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [RoutesController::class, 'welcom'])->name('wecome');
Route::get('/home',[RoutesController::class, 'home'])->name('home'); //@extends('layout.master')
Route::get('/admin-dashboard', [RoutesController::class, 'AdminDashboard'])->name('admin');
Route::get('/intern', [RoutesController::class, 'intern'])->name('Stagiaire');
Route::get('/status-offer', [RoutesController::class, 'OffreStatus'])->name('OffreStatus');

//Admin admin-Profile

//Route::get('/admin-profile', [ProfileController::class, 'index'])->name('user.admin-Profile');
/*
Route::post('/admin-profile', [App\Http\Controllers\admin-ProfileController::class, 'store'])->name('user.admin-Profile.store');
Route::put('/admin-profile', [App\Http\Controllers\admin-ProfileController::class, 'update'])->name('user.admin-Profile.update');
Route::delete('/admin-profile', [App\Http\Controllers\admin-ProfileController::class, 'destroy'])->name('user.admin-Profile.destroy');
*/