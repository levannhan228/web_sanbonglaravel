<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';

    protected $fillable = [
        'id',
        'number_of_users',
        'number_of_stadiums',
        'start_time',
        'end_time',
        // 'calendar',
        'price',
        // 'stadium_id'
    ];

}