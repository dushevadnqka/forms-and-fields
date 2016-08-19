<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', 'FormController@index');

Route::get('/form/show/{id}', 'FormController@show');

Route::get('/form/delete/{id}', 'FormController@destroy');

Route::get('/form/create', 'FormController@create');

Route::post('/form/store', 'FormController@store');

Route::get('/field', 'FieldController@index');

Route::get('/field/create', 'FieldController@create');

Route::post('/field/store', 'FieldController@store');
