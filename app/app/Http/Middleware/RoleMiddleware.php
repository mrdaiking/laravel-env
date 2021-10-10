<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(Auth()::user()->role()->name != $role){
            return redirect() -> route('login');
            abort('Khong duoc truy cap', 503);
        }
        return $next($request);
    }
}
