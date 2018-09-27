<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'likes',
        'liker_id',
        'user_id',
        'liked_to'
    ];


}
