<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['middleware' => 'auth'], function ($router) {
    $router->get('/me', 'Auth\AuthController@me');
    $router->post('/refresh', 'Auth\AuthController@refresh');

    $router->post('/logout', 'Auth\LoginController@logout');

    $router->get('/users', 'UserController@index');
    $router->get('/users/{id}', 'UserController@show');
    $router->post('/users', 'UserController@store');
    $router->put('/users/{id}', 'UserController@update');
    $router->delete('/users/{id}', 'UserController@destroy');
});

$router->post('/register', 'Auth\RegisterController@register');
$router->post('/login', 'Auth\LoginController@login');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
