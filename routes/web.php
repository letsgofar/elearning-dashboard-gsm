<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

// ******ROUTE FOR MODULE******* //
Route::get('/module/create', 'ModuleController@create')->name('module.create');
Route::post('/module/store', 'ModuleController@store')->name('module.store');
Route::get('/module/special', 'ModuleController@indexspecial')->name('module.special');
Route::get('/module/basic', 'ModuleController@indexbasic')->name('module.basic');
Route::get('/module/advanced', 'ModuleController@indexadvanced')->name('module.advanced');

Route::get('/module/special/{modules:slug}/edit', 'ModuleController@editspecial')->name('module.special.edit');
Route::patch('/module/special/{modules:slug}/edit', 'ModuleController@updatespecial')->name('module.special.edit');
Route::delete('/module/special/{modules:slug}/delete', 'ModuleController@destroyspecial')->name('module.special.delete');

Route::get('/module/basic/{modules:slug}/edit', 'ModuleController@editbasic')->name('module.basic.edit');
Route::patch('/module/basic/{modules:slug}/edit', 'ModuleController@updatebasic')->name('module.basic.edit');
Route::delete('/module/basic/{modules:slug}/delete', 'ModuleController@destroybasic')->name('module.basic.delete');

Route::get('/module/advanced/{modules:slug}/edit', 'ModuleController@editadvanced')->name('module.advanced.edit');
Route::patch('/module/advanced/{modules:slug}/edit', 'ModuleController@updateadvanced')->name('module.advanced.edit');
Route::delete('/module/advanced/{modules:slug}/delete', 'ModuleController@destroyadvanced')->name('module.advanced.delete');
// ******END ROUTE FOR MODULE******* //

// ******ROUTE FOR SCHOOL******* //
Route::get('/sekolah/model', 'SchoolController@indexmodel')->name('sekolah.model');
Route::get('/sekolah/emodel', 'SchoolController@indexemodel')->name('sekolah.emodel');
Route::get('/sekolah/jejaring', 'SchoolController@indexjejaring')->name('sekolah.jejaring');
Route::get('/sekolah/indonesia', 'SchoolController@indexindonesia')->name('sekolah.indonesia');
