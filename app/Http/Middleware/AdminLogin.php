<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;

class AdminLogin
{

    public function handle($request, Closure $next)
    {
        if (Admin::isAdminloggedin()) {
            return $next($request);
        }
         return redirect('404');
    }
}
