<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('register', 'UserController@store');
$router->post('login', 'Auth\LoginController@login');

$router->group(['middleware' => 'auth'], function ($router) {
    $router->get('me', 'Auth\AuthController@me');
    $router->post('refresh', 'Auth\AuthController@refresh');
    $router->post('logout', 'Auth\LoginController@logout');

    $router->group(['prefix' => 'users'], function ($router) {
        $router->get('', 'UserController@index');
        $router->get('{id}', 'UserController@show');
        $router->put('{id}', 'UserController@update');
    });
});

$router->get('', function () use ($router) {
    return $router->app->version();
});
