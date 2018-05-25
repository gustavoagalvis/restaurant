<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

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
Route::get('allergens/{repositoryId?}/{relationName?}/{relationId?}', 'RepositoryRelationsController@getRelations');

Route::get('dishes/{repositoryId?}/{relationName?}/{relationId?}', 'RepositoryRelationsController@getRelations');

Route::get('ingredients/{repositoryId?}/{relationName?}/{relationId?}', 'RepositoryRelationsController@getRelations');


Route::post('allergens', 'CreateController@create');
Route::put('allergens/{id}', 'UpdateController@update');
Route::delete('allergens/{id}', 'DeleteController@delete');


Route::post('dishes', 'CreateController@create');
Route::put('dishes/{id}', 'UpdateController@update');
Route::delete('dishes/{id}', 'DeleteController@delete');

Route::post('ingredients', 'CreateController@create');
Route::put('ingredients/{id}', 'UpdateController@update');
Route::delete('ingredients/{id}', 'DeleteController@delete');