<?php

Use App\Address;

Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/address', 'AddressController@index')->name('address');

Route::get('/address/new', 'AddressController@get_new')->name('new_address');
Route::post('/address/create', 'AddressController@post_new');

Route::get('/address/{id}/edit', 'AddressController@get_edit')->name('edit_address');
Route::put('/address/update', 'AddressController@put_address');