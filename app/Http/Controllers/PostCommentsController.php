<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        // back();
        request()->validate([
            'body' => ['required'],
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body'),
            'published_at' => now()
        ]);

        return back();
    }
}
