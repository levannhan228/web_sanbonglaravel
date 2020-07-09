<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Deal  extends Model
{
    protected $table ='deal';

    protected $fillable =[
        'last_name',
        'name',
        'province_city',
        'address',
        'phone',
        'email'
    ];
    public $timestamps = false;
}