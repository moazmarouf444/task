<?php

namespace App\Http\Middleware\Admin;

use App\Traits\PermissionTrait;
use Closure;

class CheckRole
{
    use PermissionTrait;

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->authHasPermission())
            return $next($request);
        else {
            abort(550);
        }
    }
}
