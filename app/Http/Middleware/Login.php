<?php

namespace App\Http\Middleware;

use App\User;
use Closure;


class Login
{

    public function handle($request, Closure $next)
    {
        if (User::isLogin()){
            return $next($request);
        }

        return redirect('404');
    }
}
