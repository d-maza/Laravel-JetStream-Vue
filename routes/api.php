<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| --------------------------------------------------------------------------
|Rutas API
| --------------------------------------------------------------------------
|
|Aquí es donde puede registrar rutas API para su solicitud.Estas
|Las rutas son cargadas por el proveedor de rutas de rutina dentro de un grupo que
|se le asigna el grupo de middleware "API".¡Disfruta construyendo tu API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});