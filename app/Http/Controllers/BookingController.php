<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingPage(){
        return view('booking');
    }
    public function store(Request $request){
        return $request->all();
    }
}
