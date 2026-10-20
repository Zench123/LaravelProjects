<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
public function index(){

$customers = [
[


'id' => 1, 
'name' => 'Juan Dela Cruz',
'email' =>'test@gmail.com',
'phone' => '0124815'




],
//

[


'id' => 2, 
'name' => 'Jim',
'email' =>'test2@gmail.com',
'phone' => '0124124815'




],
[


'id' => 3, 
'name' => 'Josh',
'email' =>'tes4t@gmail.com',
'phone' => '0124815127'




],
[


'id' => 4, 
'name' => 'Ramirez',
'email' =>'test125@gmail.com',
'phone' => '01216174815'




],[


'id' => 5, 
'name' => 'Firefly',
'email' =>'test2123@gmail.com',
'phone' => '0122161674815'




]
];


return view('customers', ['customers' => $customers]);


}









}
