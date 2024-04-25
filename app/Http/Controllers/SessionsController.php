<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {

        if (url()->previous() != url()->current() && url()->previous() != request()->getUriForPath('/register')) {
            redirect()->setIntendedUrl(url()->previous());
        }

        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credintials could not be verified!'
            ]);
        }

        session()->regenerate();

        return redirect()->intended()->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return back()->with('success', 'Goodbye!');
    }
}
