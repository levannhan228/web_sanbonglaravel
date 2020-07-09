<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post  extends Model
{
    protected $table ='post';

    protected $fillable =[
        'id',
        'type',
        'stadium',
        'address',
        'level',
        'match',
        'status',
        'note',
        'user_id'
    ];

}