<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Level  extends Model
{
    protected $table ='level';

    protected $fillable =[
        'id',
        'name_level'
    ];
}