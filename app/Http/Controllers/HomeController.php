<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::user()->is_profile_completed == false ){
            return redirect()->route('profile.create');
        }
        if(Auth::user()->role == 0){
            return view('home.studentdashboard'); // Ensure this view exists
        }else if(Auth::user()->role == 1){
            return view('home.admindashboard');
        }

    }
}
