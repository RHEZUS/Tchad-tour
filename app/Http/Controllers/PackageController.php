<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packageList(){
        return view('dashboard.packages.packageList');
    }
}
