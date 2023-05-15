<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {
    public function handle($request, Closure $next) {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }
        if(Auth::guard('admin')->user()->is_blocked == true)
        {
            auth('admin')->logout();
            return redirect()->route('admin.login')->with(['error' => 'تم حظرك من قبل الاداره']);
        }

        return $next($request);
    }
}
