<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            if (Auth::user()->role == 1 || Auth::user()->role == 2) {

                return $next($request);

            }
            else{
                return redirect()->route('login')->with('error','You can\'t access the page!!');
            }
            

        }
        return redirect()->route('login')->with('error','You Should log in first!!');
        
    }
}
