<?php
use Illuminate\Support\Facades\Route;

Route::any('/', 'UserController@index');

Route::get('show/{user_id}', 'UserController@show');

Route::get('create/{user_id}', 'UserController@create');

Route::post('create/{user_id}', 'UserController@save');

Route::get('delete/{user_id}', 'UserController@delete');

