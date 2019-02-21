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

Route::get("/animals", "AnimalsController@index");
Route::get("/animals/{animal}", "AnimalsController@show");
Route::post("/animals", "AnimalsController@store");
Route::delete("/animals/{animal}", "AnimalsController@destroy");
Route::get("/health", function(){
    return "healthy";
});

Route::get("/hello-globant", function(){
    return array(
        "message" => "Hello Julian"
    );
});
