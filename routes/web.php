<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
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
    Route::get('/sekolah/sekolahgsm', 'SchoolController@indexmodel')->name('sekolah.model');
    Route::get('/sekolah/e-model', 'SchoolController@indexemodel')->name('sekolah.emodel');
    Route::get('/sekolah/jejaring', 'SchoolController@indexjejaring')->name('sekolah.jejaring');
    Route::get('/sekolah/indonesia', 'SchoolController@indexindonesia')->name('sekolah.indonesia');

    Route::get('sekolah/model/{schools:slug}', 'SchoolController@showsekolahmodel')->name('sekolah.model.detail');
    Route::get('sekolah/emodel/{schools:slug}', 'SchoolController@showsekolahemodel')->name('sekolah.emodel.detail');
    Route::get('sekolah/jejaring/{schools:slug}', 'SchoolController@showsekolahjejaring')->name('sekolah.jejaring.detail');
    Route::get('sekolah/indonesia/{schools:slug}', 'SchoolController@showsekolahindonesia')->name('sekolah.indonesia.detail');
    // ******END ROUTE FOR SCHOOL******* //



    // ******ROUTE FOR USER******* //
    Route::get('/user/listuser', 'UserController@index')->name('user.listuser');
    Route::get('/user/{users:slug}', 'UserController@show')->name('user.detailuser');
    Route::get('/user/{users:slug}/edit', 'UserController@edit')->name('user.edituser');
    Route::patch('/user/{users:slug}/edit', 'UserController@update')->name('user.updateuser');
    Route::delete('/user/{users:slug}/delete', 'UserController@destroy')->name('user.deleteuser');
    // ******END ROUTE FOR USER******* //



    // ******ROUTE FOR KUPON******* //
    Route::get('/kupon/all-kupon', 'CouponController@index')->name('listkupon');
    Route::get('/kupon/buat-kupon', 'CouponController@create')->name('kupon.create');
    Route::post('/kupon/buat-kupon', 'CouponController@store')->name('kupon.store');
    Route::get('/kupon/{coupons:slug}/edit', 'CouponController@edit')->name('kupon.edit');
    Route::patch('/kupon/{coupons:slug}/edit', 'CouponController@update')->name('kupon.update');
    Route::delete('/kupon/{coupons:slug}/delete', 'CouponController@destroy')->name('kupon.delete');


    // ******ROUTE FOR RAPORTUSER******* //
    Route::get('/raport/guru', 'RaportuserController@index')->name('raportuser.index');
    Route::get('/raport/raportuser/newraportuser', 'RaportuserController@create')->name('raportuser.create');
    Route::post('/raport/raportuser/newraportuser', 'RaportuserController@store')->name('raportuser.store');
    Route::get('/raport/raportuser/{raportusers:slug}', 'RaportuserController@show')->name('raportuser.show');
    Route::get('/raport/guru/edit/{raportusers:slug}', 'RaportuserController@edit')->name('raportuser.edit');
    Route::patch('/raport/guru/edit/{raportusers:slug}', 'RaportuserController@update')->name('raportuser.update');


    // ******ROUTE FOR RAPORTSEKOLAH******* //
    Route::get('/raport/instansi', 'RaportschoolController@index')->name('school.index');
    Route::get('/raport/raportsekolah/newraportsekolah', 'RaportschoolController@create')->name('raportsekolah.create');
    Route::post('/raport/raportsekolah/newraportsekolah', 'RaportschoolController@store')->name('raportsekolah.store');
    Route::get('/raport/raportsekolah/{raportschools:slug}', 'RaportschoolController@show')->name('school.show');
    Route::get('/raport/instansi/edit/{raportschools:slug}', 'RaportschoolController@edit')->name('raportschool.edit');
    Route::patch('/raport/instansi/edit/{raportschools:slug}', 'RaportschoolController@update')->name('school.update');


    // ******ROUTE FOR PERMINTAAN******* //
    Route::get('request/permintaanmentor', 'RequestController@mentorindex')->name('requestmentor.index');
    Route::get('request/permintaansekolah', 'RequestController@sekolahmodelindex')->name('requestsekolahmodel.index');
    Route::patch('request/{schools:slug}/accept', 'RequestController@sekolahmodelupdate')->name('requestschool.accept');
    Route::patch('request/{users:slug}', 'RequestController@mentorupdate')->name('requestmentor.accept');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
