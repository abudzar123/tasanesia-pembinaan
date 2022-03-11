<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\InstantionController;
use App\Http\Controllers\NurseriesController;
use App\Http\Controllers\FunderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FunderProjectController;
use App\Http\Controllers\ProjectLocationController;
use App\Http\Controllers\RegistarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Models\Cities;
use App\Models\Districts;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('coach', CoachController::class);
Route::get('/coach/{id}/detail', 'App\Http\Controllers\CoachController@detail');
Route::get('/coach/{id}/edit', 'App\Http\Controllers\CoachController@edit');
Route::post('/coach/{id}/update', 'App\Http\Controllers\CoachController@update');

Route::resource('instantion', InstantionController::class);
Route::get('/instantion/{id}/detail', 'App\Http\Controllers\InstantionController@detail');
Route::get('/instantion/{id}/edit', 'App\Http\Controllers\InstantionController@edit');
Route::post('/instantion/{id}/update', 'App\Http\Controllers\InstantionController@update');


Route::resource('nurseries', NurseriesController::class);
Route::get('/nurseries/{id}/detail', 'App\Http\Controllers\NurseriesController@detail');
Route::get('/nurseries/{id}/edit', 'App\Http\Controllers\NurseriesController@edit');
Route::post('/nurseries/{id}/update', 'App\Http\Controllers\NurseriesController@update');

Route::resource('funder', FunderController::class);
Route::get('/funder/{id}/edit', 'App\Http\Controllers\FunderController@edit');
Route::post('/funder/{id}/update', 'App\Http\Controllers\FunderController@update');


Route::resource('project', ProjectController::class);
Route::get('/project/{id}/location', 'App\Http\Controllers\ProjectController@location');
Route::get('/project/{id}/edit', 'App\Http\Controllers\ProjectController@edit');
Route::post('/project/{id}/update', 'App\Http\Controllers\ProjectController@update');


Route::resource('funder_project', FunderProjectController::class);
Route::get('/funder_project/{id}/edit', 'App\Http\Controllers\FunderProjectController@edit');
Route::post('/funder_project/{id}/update', 'App\Http\Controllers\FunderProjectController@update');


Route::resource('project_location', ProjectLocationController::class);
Route::get('/project_location/{id}/edit', 'App\Http\Controllers\ProjectLocationController@edit');
Route::post('/project_location/{id}/update', 'App\Http\Controllers\ProjectLocationController@update');

Route::resource('/registers', RegistarController::class)->middleware('guest');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login')->middleware('guest');
Route::post('/create', 'App\Http\Controllers\LoginController@authenticate');
Route::get('/dashboard', 'App\Http\Controllers\LoginController@example')->middleware('auth');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout' );

Route::resource('/admin', AdminController::class);

Route::resource('/product', ProductController::class);

Route::get('getCities/{id}', function ($id) {
    $cities = Cities::where('province_id', $id)->get();
    return response()->json($cities);
});

Route::get('getDistricts/{id}', function ($id) {
    $districts = Districts::where('city_id', $id)->get();
    return response()->json($districts);
});

// Route::resource('login', RegisterPetaniController::class);
// Route::get('/petani/login', 'App\Http\Controllers\LoginController@index');
// Route::post('/login', 'App\Http\Controllers\LoginController@create');






