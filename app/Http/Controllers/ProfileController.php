<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileList(){
        return view('dashboard.users.profileList');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
        
    }
}
