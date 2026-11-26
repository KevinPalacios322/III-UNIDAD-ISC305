<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/hola',function (){
    return response()->json([
        'mensaje' => 'Hola mundo desde mi API Laravel',
        'asignatura' => 'ISC-305 Programacion Web'


    ]);


});

Route::get('/personas', [PersonaController::class, 'index']);
Route::get('/personas/{id}', [PersonaController::class, 'show'])
->whereNumber('id');
