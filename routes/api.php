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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/news","App\Http\Controllers\NewsController@index_api");

Route::get("/countries","App\Http\Controllers\CountryController@index_api");
Route::get("/states","App\Http\Controllers\StateController@index_api");
Route::get("/cities","App\Http\Controllers\CityController@index_api");
Route::get("/parishes","App\Http\Controllers\ParishController@index_api");
Route::get("/symptoms", "App\Http\Controllers\SymptomController@index_api");
Route::get("/treatments", "App\Http\Controllers\TreatmentController@index_api");
Route::get("/causes", "App\Http\Controllers\CauseController@index_api");