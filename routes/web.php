<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/servicios', [ServiciosController::class, 'index']);
Route::get('/nosotros', [NosotrosController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);