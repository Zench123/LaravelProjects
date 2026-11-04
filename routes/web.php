<?php
//routes
use Illuminate\Support\Facades\Route;

//tfa5

use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;


Route :: get('/',[TaskController::class,'index']);
Route :: get('/tasks',[TaskController::class,'tasks']);
Route :: get('/about',[TaskController::class,'about']);
Route :: get('/profile',[TaskController::class,'tasks']);



