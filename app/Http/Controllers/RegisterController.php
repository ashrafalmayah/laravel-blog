<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        User::create(request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'username' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'max:255', 'min:7'],
        ]));

        return redirect('/');
    }
}