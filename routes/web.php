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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1' ,['namespace' => 'App\Http\Controllers\V1'] , function ($api){
    //测试
    $api->get('test', function(){
        return 'hi Evan';
    });
});

$api->version('v2', ['namespace' => 'App\Http\Controllers\V2'], function($api){
    //测试
    $api->get('test', function(){
        return 'hi Tang Zhao Wen';
    });
});

$router->get('/', function () use ($router) {
    return $router->app->environment();
});
