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

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/index', function () {
    return view('master');
});
Route::get('/addcontact', 'AdminController@add_contact') ;
Route::get('/allcontact', 'AdminController@all_contact') ;
Route::get('/dashboard', 'AdminController@dashboard') ;
Route::post('/save_contact', 'AdminController@save_contact') ;
//Route::get('delete-records','AdminController@index');
//Route::get('/delete','AdminController@destroy');
Route::get('/delete_contact/{id}','AdminController@destroy');
Route::get('/edit_contact/{id}','AdminController@edit');
Route::post('/update_contact/{id}','AdminController@update');
