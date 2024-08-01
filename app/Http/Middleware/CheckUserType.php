<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckUserType
{
    public function handle($request, Closure $next, $type)
    {
        if (Session::get('user_type') !== $type) {
            return redirect('/login');
        }

        return $next($request);
    }
}

