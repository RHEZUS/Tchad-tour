<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileList(){
        return view('dashboard.users.profileList');
    }
}
