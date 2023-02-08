<?php

use App\Http\Controllers\Admin\AveriaController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('',[HomeController::class,'index']);

//Controlador averias
Route::get('', [AveriaController::class, 'index'])->name('admin.averias');