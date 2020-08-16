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
    return $router->app->version();
});
$router->group(['prefix' => 'students'], function () use ($router) {
    $router->get('/', 'StudentController@showAllStudents');
    $router->get('/{id}', 'StudentController@showOneStudents');
    $router->post('/', 'StudentController@create');
    $router->put('/{id}', 'StudentController@update');
    $router->delete('/{id}', 'StudentController@delete');
    });