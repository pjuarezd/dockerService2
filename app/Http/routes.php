<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return "Lumen RESTful API";
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('car','CarController@index');
 
	$app->get('car/{id}','CarController@getCar');
	 
	$app->post('car','CarController@createCar');
	 
	$app->put('car/{id}','CarController@updateCar');
	 
	$app->delete('car/{id}','CarController@deleteCar');
});

