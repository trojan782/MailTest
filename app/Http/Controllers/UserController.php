<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(7);
        return view('users', ['users' => $users]);
    }
}
