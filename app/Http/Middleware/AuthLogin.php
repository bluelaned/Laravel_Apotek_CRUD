<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userRole)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('login');
        }

        $user = Auth::guard('admin')->user();
        if ($user->role == $userRole) {
            return $next($request);
        }

        return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
    }


}
