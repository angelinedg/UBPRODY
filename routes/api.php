<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('employees', 'EmployeeController');
});

Route::group(['prefix' => 'v2', 'namespace' =>'API'], function()
{
	Route::apiResource('platforms', 'PlatformController');
});

Route::group(['prefix' => 'v3','namespace' => 'API'], function(){
    Route::apiResource('operatorstats', 'operatorstats');
});


Route::group(['prefix' => 'v4','namespace' => 'API'], function(){
    Route::apiResource('aliasdump', 'AliasDumpController');
});


Route::group(['prefix' => 'v5','namespace' => 'API'], function(){
    Route::apiResource('operators', 'OperatorController');
});

