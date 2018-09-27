<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'sex',
        'age',
        'religion',
        'occupation',
        'address',
        'category_id',
        'phone',
        'photo_id',
        'salary',
        'about',
        'password',
        'likes',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function users(){
        return $this->hasMany('App\Usergallery');
    }

    //middleware login
    public static function isLogin(){
        if (session('id')){
            return true;
        }
        return false;
    }
}
