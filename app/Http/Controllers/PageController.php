<?php

namespace App\Http\Controllers;
use App\Models\Expertclass;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('perusahaan.glints');
    }

    public function glints(){
        $classes = Expertclass::all()->random(3);
        if(auth()->user()){
            if(auth()->user()->role == 'admin'){
                return redirect('/admin/dashboard');
            }else if(auth()->user()->role == 'user'){
                return view('user.index')->with([
            'classes' => $classes,
        ]);
            }else if(auth()->user()->role == 'company'){
                return redirect('/perusahaan');
            }
        }

        return view('user.index')->with([
            'classes' => $classes,
        ]);
    }

    // SELECT * FROM expertclasses


    public function showDashboard(){
        return view('perusahaan.dashboard');
    }

    public function show($page){
        $page =  filter_var($page, FILTER_SANITIZE_STRING);
        return view('perusahaan.'.$page); 
    }   
}



