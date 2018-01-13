<?php

Use App\Address;

Route::get('api/address/', 'AddressController@get_all_addresses');
Route::get('api/address/{id}', 'AddressController@get_single_address_by_id');