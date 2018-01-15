<?php

Use App\Address;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/address', 'AddressController@index')->name('address');
Route::get('/address/new', 'AddressController@get_new')->name('new_address');

Route::post('/address/create', 'AddressController@post_new');