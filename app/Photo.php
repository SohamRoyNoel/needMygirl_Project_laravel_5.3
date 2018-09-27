<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path'
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
}
