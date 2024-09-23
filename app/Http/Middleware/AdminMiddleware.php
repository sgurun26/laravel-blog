<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    {
        if (Auth::check()) {
            // Check if the authenticated user is an admin
            if (Auth::user()->role != 'admin') {
                // Redirect to login if not an admin
                return redirect('/login');
            }
        
            // The user is authenticated and an admin, continue with the request
        } else {
            // The user is not authenticated, redirect to login
            return redirect('/login');
        }
        return $next($request);
    }
}
