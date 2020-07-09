<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Calendar  extends Model
{
    protected $table ='calendar';

    protected $fillable =[
        'id',
        'title',
        'start',
        'end',
        'id_stadium'
    ];
    public $timestamps = false;
}