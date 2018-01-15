<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

use Eloquent;

class Address extends Eloquent
{
    public $table = 'address';

    public static $rules = [
        'name'      => ['required'],
        'address'   => ['required', 'unique:address,name,address,user_id'],
        'user_id'   => ['required|nullable'],
    ];

    public static $messages = [
        'name.required' => 'Naam is een verplicht veld.',
        'address.required' => 'Adres is een verplicht veld.',
    ];

    public static function validate($data) {
        return Validator::make($data, static::$rules, static::$messages);
    }
    
    protected $fillable = [
        'name', 'address', 'user_id',
    ];

}
