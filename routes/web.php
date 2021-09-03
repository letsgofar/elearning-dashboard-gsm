<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/module/create', 'ModuleController@create')->name('module.create');
Route::post('/module/store', 'ModuleController@store')->name('module.store');
Route::get('/module/special', 'ModuleController@indexspecial')->name('module.special');
Route::get('/module/basic', 'ModuleController@indexbasic')->name('module.basic');
Route::get('/module/advanced', 'ModuleController@indexadvanced')->name('module.advanced');
