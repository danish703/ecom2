<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/dashboard',[DashboardController::class,'home'])->name('dashboard');
Route::get('/dashboard/create-category',[DashboardController::class,'createCategory'])->name('category');
Route::get('/dashboard/add-proudct',[DashboardController::class,'addProduct'])->name('addProduct');
Route::get('/', function () {
    return view('home');
});

Route::get('/signup',function(){
   return view('signup');
});

Route::get('/login',function(){
    return view('login');
});