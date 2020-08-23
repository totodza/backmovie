<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('comentario/{id}','ComentarioController@show');

//Route::get('login/{email}/{pass}','NombreController@login');

Route::post('comentarios','ComentaController@store2');

Route::resource('user','UserController');

Route::get('user/{nick}/{password}','UserController@show');
