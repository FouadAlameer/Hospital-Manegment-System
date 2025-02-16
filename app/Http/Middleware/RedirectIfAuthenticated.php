<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if (Auth('web')->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        if (Auth('admin')->check()) {
                return redirect(RouteServiceProvider::ADMIN);
            }
        

        return $next($request);
    }

    
   
}
