<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use TPG\Deadbolt\Facades\Deadbolt;

class PermissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!(Auth::check() && Auth::user() != null)) {
            return $next($request);
        }
        $user = Auth::user();
        $all_permissions = Deadbolt::all();
        $user_permissions = Deadbolt::user($user)->all();

        foreach ($user_permissions as $user_permission) {
            Gate::define(
                $user_permission,
                function ($all_permissions) use ($user_permission) {
                    if (isset($all_permissions, $user_permission)) {
                        return true;
                    }
                }
            );
        }

        return $next($request);
    }
}
