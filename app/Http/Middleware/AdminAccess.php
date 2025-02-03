<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check())
        {
            if (auth()->user()->email == 'dimalisovoy@limaria.com.ua')
            {
                return $next($request);
            }
            else
            {
                return redirect()->route("admin.auth");
            }
        }
        else
        {
            return redirect()->route("admin.auth");
        }
    }

}



