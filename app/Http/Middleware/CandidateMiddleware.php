<?php

namespace App\Http\Middleware;

use Closure;

class CandidateMiddleware
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
        if(auth()->check() && auth()->user()->user_role == 'candidate')
        {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
