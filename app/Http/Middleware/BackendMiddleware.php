<?php

namespace App\Http\Middleware;

use Closure;

class BackendMiddleware
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
        if(!$status = \Sentry::check()){
            return redirect('auth/login');
            //return var_dump($status);
        }
        return $next($request);
    }
}
