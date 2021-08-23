<?php

namespace LaravelEG\Laravel\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserOnlineMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
        $response = $next($request);
        if (Auth::check()) {
            Cache::put('userIsOnline-'.Auth::user()->id, 'true', now()->addMinutes(config('laravelegUserOnline.time_allowed')));
        }
        return $response;
    }
}
