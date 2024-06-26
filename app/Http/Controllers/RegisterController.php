<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        if (url()->previous() != url()->current() && url()->previous() != request()->getUriForPath('/login')) {
            redirect()->setIntendedUrl(url()->previous());
        }

        return view('register.create');
    }

    public function store()
    {
        $user = User::create(request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'max:255', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:7'],
        ]));

        auth()->login($user);
        return redirect()->intended()->with('success', 'Your account has been created!');
    }
}
