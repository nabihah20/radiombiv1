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

//Route::get('/', function () {
    //return view('welcome'); 
//});

Route::get('/', 'HomeController@index');
Route::get('/djiz', 'PagesController@djiz');
Route::get('/djsyah', 'PagesController@djsyah');
Route::get('/djelly', 'PagesController@djelly');

Route::get('/djfaz', 'PagesController@djfaz');
Route::get('/djzam', 'PagesController@djzam');
Route::get('/djisz', 'PagesController@djisz');
Route::get('/djmil', 'PagesController@djmil');

Route::get('/jadualdj', 'PagesController@jadual');
Route::get('/teknikal', 'PagesController@teknikal');
Route::get('/testimoni', 'PagesController@testimoni');
Route::get('/temuramah', 'PagesController@temuramah');
Route::get('/tentang', 'PagesController@tentang');
Route::post('/composemail', 'MailsController@postMail');
