<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => ['required', 'email']]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages(['email' => 'This email could not be signed to our newsletter.']);
        }

        return back()->with('success', 'You are now signed in to our newsletter!');
    }
}
