<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
| --------------------------------------------------------------------------
|Verifique si la aplicación está en mantenimiento
| --------------------------------------------------------------------------
|
|Si la aplicación está en modo de mantenimiento / demostración a través del comando "abajo"
|Cargaremos este archivo para que se pueda mostrar cualquier contenido previamente renderizado.
|En lugar de comenzar el marco, lo que podría causar una excepción.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
| --------------------------------------------------------------------------
|Registre el cargador automático
| --------------------------------------------------------------------------
|
|El compositor proporciona un cargador de clase conveniente y generado automáticamente para
|esta aplicación.¡Solo necesitamos utilizarlo!Simplemente lo requeriremos
|en el guión aquí para que no necesitemos cargar manualmente nuestras clases.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
| --------------------------------------------------------------------------
|Ejecutar la aplicación
| --------------------------------------------------------------------------
|
|Una vez que tenemos la aplicación, podemos manejar la solicitud entrante utilizando
|El kernel HTTP de la aplicación.Entonces, enviaremos la respuesta de regreso
|al navegador de este cliente, permitiéndoles disfrutar de nuestra aplicación.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);