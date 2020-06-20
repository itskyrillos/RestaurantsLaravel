<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $fillable = [
        'name',
        'address',
        'zipCode',
        'town',
        'country',
        'description',
        'review'
    ];
}
