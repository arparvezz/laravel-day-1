<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactController;



Route::get('/',[homeController::class, 'index']);

Route::get('/about',[aboutController::class, 'index']);

Route::get('/contact',[contactController::class, 'index']);