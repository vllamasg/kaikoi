<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {/*
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/

        if (!Auth::check()) {
          // The user is logged in...
              return redirect('/login');
        }

        return $next($request);
    }
}
