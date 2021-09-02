<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/module/create', 'ModuleController@create')->name('module.create');
Route::post('/module/store', 'ModuleController@store')->name('module.store');
