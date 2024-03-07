<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Example code to authenticate the user (replace it with your own logic)
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful
            if(auth()->user()->role == 'admin'){
                return redirect('/admin/dashboard');
            }else if(auth()->user()->role == 'company'){
                return redirect('/perusahaan/page/dashboard');
            }else{
                return redirect('/');
            }
        } else {
            $request->session()->flash('error', 'Email atau Password Salah, Silahkan Coba Lagi!');
            return redirect('login'); // Redirect back with error message
            // Authentication failed
            }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}


// -- No SQL code is required for the provided PHP code since it mainly relies on Laravel's built-in authentication system and does not interact directly with the database at this point.
// -- However, the authentication-related tables should be present in the database, which are typically created by running Laravel's default migrations.
// -- These tables include `users` and `password_resets`.

// -- Assuming the necessary tables are already created, you can proceed with the PHP code and use Laravel's authentication system as intended.

// -- Make sure you have the appropriate `users` table schema in your database, typically created by running Laravel's default migrations:

// CREATE TABLE IF NOT EXISTS users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     email VARCHAR(255) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     role VARCHAR(255) NOT NULL,
//     remember_token VARCHAR(100),
//     created_at TIMESTAMP NULL DEFAULT NULL,
//     updated_at TIMESTAMP NULL DEFAULT NULL
// );

// -- The `users` table should have the necessary columns for user authentication, including `email` and `password`.

// -- You may also need to run the default Laravel migrations to create the `password_resets` table for password reset functionality if you haven't done so already.

// -- Additionally, make sure you have the appropriate routes and views set up for the login and logout functionality in your Laravel application.

// -- The SQL code provided here is only for reference and assumes that the necessary tables already exist in your database.
// -- Laravel's authentication system abstracts away most of the database interactions and provides a convenient interface for user authentication.
// -- It is recommended to use Laravel's built-in authentication system along with its default migrations for better security and maintainability.
