<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'id',
        'account',
        'password',
        'they',
        'name',
        'email',
        'phone',
        'permissions'];

}