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

$router->get('task/{id}','TaskController@fibonacci');

//untuk menyimpan
$router->post('user', 'UserController@store');

//untuk menampilkan semua data
$router->get('user', 'UserController@index');

//untuk menampilkan salah satu data
$router->get('user/{id}', 'UserController@show');

//untuk mengubah data
$router->put('user/{id}', 'UserController@update');

//untuk menghapus data
$router->delete('user/{id}', 'UserController@destroy');

//untuk menyimpan
$router->post('git', 'GitController@store');

//untuk menampilkan semua data
$router->get('git', 'GitController@index');

//untuk menampilkan salah satu data
$router->get('git/{id}', 'GitController@show');

//untuk mengubah data
$router->put('git/{id}', 'GitController@update');

//untuk menghapus data
$router->delete('git/{id}', 'GitController@destroy');