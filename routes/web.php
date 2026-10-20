<?php
//routes
use Illuminate\Support\Facades\Route;

//tfa5

use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;


Route :: get('/',[PageController::class,'index']);
Route :: get('/about',[PageController::class,'about']);

Route :: get('/customers',[CustomerController::class,'index']);
Route :: get('/users',[UserController::class,'index']);



