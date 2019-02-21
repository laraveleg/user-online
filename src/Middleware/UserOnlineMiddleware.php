<?php

namespace komicho\Middleware;

use Closure;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class UserOnlineMiddleware
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
        $response = $next($request);
        if (Auth::check()) {
            Cache::store('file')->put('userIsOnline-'.Auth::user()->id, 'true', now()->addMinutes(1));
        }
        return $response;
    }
}