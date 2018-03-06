<?php

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

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('candidate', 'CandidateCrudController');
    CRUD::resource('criterion', 'CriterionCrudController');
    CRUD::resource('round', 'RoundCrudController');
    CRUD::resource('judge', 'JudgeCrudController');
    CRUD::resource('judging', 'StartJudgingCrudController');
    CRUD::resource('result', 'ResultCrudController');

    Route::get('casualwear', 'ResultCrudController@casualwear');
    Route::get('creativeheaddress', 'ResultCrudController@CreativeHeadDress');
    Route::get('physique', 'ResultCrudController@physique');
    Route::get('swimwear', 'ResultCrudController@swimwear');
    Route::get('facialbeautylooks', 'ResultCrudController@facialbeautylooks');
    Route::get('formalwear', 'ResultCrudController@formalwear');
});

// Route::get('/admin/judging', 'StartJudgingController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/submit', 'HomeController@submit')->name('submit');
