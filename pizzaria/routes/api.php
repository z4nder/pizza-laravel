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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('client', 'Api\ClientController');
Route::apiResource('client_address', 'Api\ClientAddressController');

Route::apiResource('order', 'Api\OrderController');

Route::apiResource('pizza', 'Api\PizzaController');
Route::apiResource('ingredient', 'Api\IngredientController');
Route::apiResource('pizza_ingredient', 'Api\PizzaIngredientController');

