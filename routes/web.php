<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
   return "Hello World";
});

Route::get('/hello/from/jashore',function(){
   return "Hello World-1";
});
