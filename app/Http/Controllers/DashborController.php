<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashborController extends Controller
{
    //
    function dashbord(){
        return view('dashboard');
    }
}
