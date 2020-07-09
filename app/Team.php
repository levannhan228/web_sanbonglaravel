<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    protected $fillable = [
        'id',
        'access_address',
        'team_name',
        'place',
        'level',
        'logo',
        'team_photo',
        'age_from',
        'to_age',
        'about',
        'user_id'];
        public $timestamps = false;
}