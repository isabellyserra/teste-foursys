<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index');

Route::get('show/{user_id}', 'UserController@show');

Route::get('create/{user_id}', 'UserController@create');

Route::get('create/{user_id}', 'UserController@create');

