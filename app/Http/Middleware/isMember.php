<?php

namespace App\Http\Middleware;

use Closure;

class isMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && $request->user()->role_id === 4)
        {
            return redirect()->guest('/home');
        }
        return $next($request);
    }
}