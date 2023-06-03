<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function Trash(){
        return view('dashboard.trash');
    }
}
