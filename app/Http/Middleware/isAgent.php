<?php

namespace App\Http\Middleware;

use Closure;

class isAgent
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
        if (auth()->check() && $request->user()->role_id == 3)
        {
            return redirect()->guest('/agent/dashboard');
        }
        return $next($request);
    }
}
