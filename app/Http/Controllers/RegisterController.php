<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\UserDesc;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('/auth/register');
    }

    public function showCompanyRegistrationForm()
    {
        return view('/auth/registerCompany');
    }


    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = User::create([
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 1,
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user_id = $user->id;

        UserDesc::insert([
            'user_id' => $user_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect or perform any additional actions
        return redirect('/login')->with('success', 'User registration successful, Please Login! ');
    }
    public function registerCompany(Request $request){
         $validatedData = $request->validate([
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 2,
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user_id = $user->id;

        Company::insert([
            'company_id' => $user_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/login')->with('success', 'Company registration successful, Please Login! ');
    }
}