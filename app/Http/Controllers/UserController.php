<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'juan01',
                'full_name' => 'Juan Dela Cruz',
                'email' => 'test@gmail.com'
            ],
            [
                'id' => 2,
                'username' => 'jim02',
                'full_name' => 'Jim',
                'email' => 'test2@gmail.com'
            ],
            [
                'id' => 3,
                'username' => 'josh03',
                'full_name' => 'Josh',
                'email' => 'tes4t@gmail.com'
            ],
            [
                'id' => 4,
                'username' => 'ramirez04',
                'full_name' => 'Ramirez',
                'email' => 'test125@gmail.com'
            ],
            [
                'id' => 5,
                'username' => 'firefly05',
                'full_name' => 'Firefly',
                'email' => 'test2123@gmail.com'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}
