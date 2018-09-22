<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usergallery extends Model
{
    protected $fillable = [
        'path',
        'user_id'
    ];

}
