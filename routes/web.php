<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});


// USER CONTROLLER ROUTES

$router->get('/students',['uses' => 'UserController@getUsers']);

$router->get('/student/{id}', 'UserController@getID');

$router->post('/student', 'UserController@addUser');

$router->put('/student/{id}', 'UserController@updateUser');

$router->patch('/student/{id}', 'UserController@updateUser');

$router->delete('/student/{id}', 'UserController@deleteUser');


// USER DETAILS CONTROLLER ROUTES

$router->get('/studentdetails','UserDetailsController@index');

$router->get('/studentdetails/{id}','UserDetailsController@show');

$router->post('/studentdetails', 'UserDetailsController@add');


// USER GRADES CONTROLLER ROUTES

$router->get('/studentgrades','UserGradesController@index');

$router->get('/studentgrades/{id}','UserGradesController@show');