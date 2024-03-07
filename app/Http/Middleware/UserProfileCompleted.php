<?php

namespace App\Http\Middleware;

use Closure;
use \App\Models\UserDesc;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserProfileCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $models = [
            'Achievements',
            'Experience',
            'Education',
            'Organization'
        ];

        $user = auth()->user()->UserDesc;
        if($user && !$user->profileCompleted()){
            $request->session()->flash('rejected', 'Please complete your profile first!');
            return redirect('/user/profil');
        }
        foreach ($models as $mo) {
            $model = 'App\\Models\\' . $mo;
            $record = $model::where('user_id', $user->user_id)->first();
            if (!$record) {
               $request->session()->flash('rejected', 'Please complete your profile first!');
               return redirect('/user/profil');
            }
        }

        return $next($request);


        // $user = auth()->user()->UserDesc;
        // if($user && !$user->profileCompleted()){
        //     $request->session()->flash('rejected', 'Please complete your profile first!');
        //     return redirect('/user/profil');
        // }
        // return $next($request);
    }
}
