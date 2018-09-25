<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'privilage',
        'password',
        'no_user_access'
    ];

    public static function isAdminloggedin(){

        if (session('nameAdmin') && session('emailAdmin')){
            return true;
        }
        return false;
    }
}
