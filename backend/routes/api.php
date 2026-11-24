<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hola',function (){
    return response()->json([
        'mensaje' => 'Hola mundo desde mi API Laravel',
        'asignatura' => 'ISC-305 Programacion Web'


    ]);


});
