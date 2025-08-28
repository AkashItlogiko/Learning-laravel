<?php

use App\Http\Controllers\DashborController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',function(){
//    return "Hello World";
// });

Route::get("/hello",[WelcomeController::class,'sayHello']);
Route::get('texbook',[WelcomeController::class,'texbook']);
Route::get('dashbord',[DashborController::class,'dashbord']);

