<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
class TaskController extends Controller
{
    //



//listings
public function tasks(){
$tasks = Task::orderby('task_date')->get();
return view('tasks',compact('tasks'));

}
//profile
public function profile(){

$user = User::first();
return view('profile',compact('user'));

}
public function about(){

return view('about');

}

//welcom page

public function index(){
$tasks = Task::whereDate('task_date',today())->get();
return view('welcome',compact('tasks'));

}




}
