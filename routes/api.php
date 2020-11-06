<?php

use App\Http\Controllers\GraphController;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\RelationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'graphs'] , function(){
        Route::post('/' , [GraphController::class, 'store']);
        Route::put('/{id}' , [GraphController::class, 'update']);
        Route::delete('/{id}' , [GraphController::class, 'delete']);
        Route::get('/' , [GraphController::class, 'getGraphs']);
        Route::get('/{id}' , [GraphController::class, 'getSingleGraph']);
    });
    Route::group(['prefix' => 'nodes'] , function(){
        Route::post('/{graphId}' , [NodeController::class, 'store']);
        Route::delete('/{childId}' , [NodeController::class, 'delete']);
    });
    Route::group(['prefix' => 'relations'] , function(){
        Route::post('/{parentId}/{childId}' , [RelationController::class, 'store']);
        Route::delete('/{parentId}/{childId}' , [RelationController::class, 'delete']);
    });
});
