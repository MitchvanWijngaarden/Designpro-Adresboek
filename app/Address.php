<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Eloquent;

class Address extends Eloquent
{
    public $table = 'address';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'naam', 'address',
    ];

}
