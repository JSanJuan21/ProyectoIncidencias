<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IncidenciaController;
use Illuminate\Support\Facades\Route;

Route::get('',[HomeController::class,'index']);
Route::resource('incidencia', IncidenciaController::class)->names('admin.incidencias');