<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'api\PassportController@login');
Route::post('register', 'api\PassportController@register');   

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('get-details', 'api\PassportController@getDetails');
    Route::get('address', 'AddressController@get_all_addresses');
    Route::get('address/{id}', 'AddressController@get_single_address_by_id');
});
