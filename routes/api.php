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
//esta ruta retorna un hola mundo en get 
Route::get('/test/{$id}', function($id){
return 'El parametro es: '.$id;
});

//esta ruta retornaa un hola mundo en post
Route::post('/test',function(){
    return 'hola mundo';
});