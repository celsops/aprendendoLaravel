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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teste', 'TesteController@index')->name('teste');
Route::get('/create-note', 'NoteController@create')->name('createNote');
Route::get('/resultado-cadastro', 'NoteController@store')->name('result-criation'); 
Route::get('/update', 'NoteController@update')->name('update'); 