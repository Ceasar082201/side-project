<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        $user = Auth::user();
        if($user->role == 'admin')
        {
            return redirect('/admin-dashboard');
        } elseif ($user->role == 'user')
        {
            return redirect('/user-dashboard');
        }

        return $next($request);
    }
}
