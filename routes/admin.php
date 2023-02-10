<?php

use App\Http\Controllers\Admin\AlumnoController;
use App\Http\Controllers\Admin\AulaController;
use App\Http\Controllers\Admin\AveriaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IncidenciaController;
use Illuminate\Support\Facades\Route;

Route::get('',[HomeController::class,'index']);

Route::resource('incidencias', IncidenciaController::class)->names('admin.incidencias');

Route::resource('aulas', AulaController::class)->names('admin.aulas');

Route::resource('alumnos', AlumnoController::class)->names('admin.alumnos');

Route::resource('averias', AveriaController::class)->names('admin.averias');