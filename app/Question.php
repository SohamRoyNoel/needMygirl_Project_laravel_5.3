<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question',
        'description',
        'block'
    ];

    public function replies(){
        return $this->hasMany('App\Reply');
    }
}
