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
    return view('index');
});


Route::group(['prefix' =>'user'] , function(){
    Route::get('/data','UserController@getUser');
    Route::get('/login' , 'UserController@getLogin');
    Route::post('/login', 'UserController@postLogin');
    Route::post('/pdf','UserController@postPDF');
    Route::get('/pdf/create','UserController@createPDF');
    
});

Route::group(['prefix'=>'treatment'],function(){
    Route::get('/record','TreatmentController@getrecord');
    
});
