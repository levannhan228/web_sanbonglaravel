<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id',
        'user_id',
        'stadium',
        'post_id',
        'statust'
    ];

}