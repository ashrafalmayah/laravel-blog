<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::latest('published_at')->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', [
        'post' =>  $post
    ]);
})->where('post', '[A-z_\-0-9]+');

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts' => $category->posts->sortByDesc('published_at')
    ]);
});

Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts->sortByDesc('published_at')
    ]);
});
