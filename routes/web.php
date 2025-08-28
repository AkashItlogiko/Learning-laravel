<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',function(){
//    return "Hello World";
// });

Route::get("/hello",[WelcomeController::class,'sayHello']);
Route::get('texbook',[WelcomeController::class,'texbook']);
