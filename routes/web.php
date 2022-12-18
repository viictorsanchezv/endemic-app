<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ParishController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');







Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('news', NewsController::class)->middleware(['role:1,3', 'auth']);
    Route::resource('countries', CountryController::class)->middleware(['role:1,0', 'auth']);
    Route::resource('states', StateController::class)->middleware(['role:1,0', 'auth']);
    Route::resource('cities', CityController::class)->middleware(['role:1,0', 'auth']);
    Route::resource('parishes', ParishController::class)->middleware(['role:1,0', 'auth']);
    Route::resource('treatments', TreatmentController::class)->middleware(['role:1,2', 'auth']);
    Route::resource('causes', CauseController::class)->middleware(['role:1,2', 'auth']);
    Route::resource('symptoms', SymptomController::class)->middleware(['role:1,2', 'auth:sanctum']);
    Route::resource('diseases', DiseaseController::class)->middleware(['role:1,2', 'auth']);
    Route::resource('roles', RoleController::class)->middleware(['role:1,0', 'auth']);
    Route::resource('users', UserController::class)->middleware(['role:1,0', 'auth']);

	
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

