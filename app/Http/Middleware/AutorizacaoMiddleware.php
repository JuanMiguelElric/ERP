<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
class AutorizacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * 
     */
    public function handle(Request $request, Closure $next, Auth $auth): Response
    {
        if(!$request->is('auth/login') && $auth->guest()){
            return redirect('auth/login');
        }
        return $next($request);
    }
}
