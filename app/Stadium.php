<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadium';

    protected $fillable = [
        'id',
        'name',
        'manager_name',
        'phone',
        'email',
        'facebook',
        'province_city',
        'short_note',
        'location',
        'surface',
        'img',
        'price',
        'about',
        'user_id',
    ];
    
}