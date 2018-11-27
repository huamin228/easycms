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
    //echo 'aa';
    return view('index',[]);
   // return $router->app->version();
});


$router->get('news/index',"News@index");
$router->get('news/add',"News@add");
$router->get('news/lists',"News@lists");

$router->get('sys/welcome',"Sys@welcome");