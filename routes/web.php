<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'Hello World! <br>' . $router->app->version();
});

$router->get('user/{id}', function ($id) {
    return 'User '.$id;
});

/**
 * Routes for resource maquinas
 */
$app->get('maquinas', 'MaquinasController@all');
$app->get('maquinas/{id}', 'MaquinasController@get');
$app->post('maquinas', 'MaquinasController@add');
$app->put('maquinas/{id}', 'MaquinasController@put');
$app->delete('maquinas/{id}', 'MaquinasController@remove');
