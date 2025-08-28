<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    //
    function sidebar(){
        return view('dashboard.sidebar.sidebar');
    }
}
