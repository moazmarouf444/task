<?php

namespace App\Http\Middleware\Admin;

use Closure;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('lang')) {
            session()->replace(['lang', app()->getLocale()]);
            app()->setLocale(session()->get('lang'));
        }

        return $next($request);
    }
}
