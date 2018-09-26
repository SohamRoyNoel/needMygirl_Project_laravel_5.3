<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable =[
      'reply',
      'block',
        'question_id'
    ];
}
