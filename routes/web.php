<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/module/create', 'ModuleController@create')->name('module.create');
Route::post('/module/store', 'ModuleController@store')->name('module.store');
Route::get('/module/special', 'ModuleController@indexspecial')->name('module.special');
Route::get('/module/basic', 'ModuleController@indexbasic')->name('module.basic');
Route::get('/module/advanced', 'ModuleController@indexadvanced')->name('module.advanced');

Route::get('/module/special/{modules:slug}/edit', 'ModuleController@editspecial')->name('module.special.edit');
Route::patch('/module/special/{modules:slug}/edit', 'ModuleController@updatespecial')->name('module.special.edit');

Route::get('/module/basic/{modules:slug}/edit', 'ModuleController@editbasic')->name('module.basic.edit');
Route::patch('/module/basic/{modules:slug}/edit', 'ModuleController@updatebasic')->name('module.basic.edit');

Route::get('/module/advanced/{modules:slug}/edit', 'ModuleController@editadvanced')->name('module.advanced.edit');
Route::patch('/module/advanced/{modules:slug}/edit', 'ModuleController@updateadvanced')->name('module.advanced.edit');
