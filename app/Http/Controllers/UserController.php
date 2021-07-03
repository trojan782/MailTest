<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    public function index(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:4|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if($user) {
            return view('home');
        }
        
    }
}
