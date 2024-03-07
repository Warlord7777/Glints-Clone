<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$allowedRoles): Response
    {
        if (auth()->check()) {
            if (in_array(auth()->user()->role, $allowedRoles)) {
                return $next($request);
            }
        }elseif(in_array('guest', $allowedRoles)){
                return $next($request);
        }
        // if(auth()->user()->role == $userType){
        //     return $next($request);
        // }
        return redirect()->route('error_403');
    }
}
