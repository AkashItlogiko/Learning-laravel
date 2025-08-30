<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    //
    function sidebar(){
        $name='John Doe';
        $email='johndoe@gmail.com';
        return view('dashboard.sidebar.sidebar',compact('name','email'));
    }
}
