<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyProfileCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user()->Company;
        if($user && !$user->profileCompleted()){
            $request->session()->flash('RejectedProfile', 'Please complete your profile first!');
            return redirect('/perusahaan/edit-profil');
        }
        return $next($request);
    }
}
