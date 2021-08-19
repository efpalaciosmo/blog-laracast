<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);


});

Route::get('/posts/{post}', function ($id) {
    // Find a post by its slug and pass it to a view called "post

    return view('post',[
        'post' => Post::findOrFail($id)
    ]);

   /* $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if(!file_exists($path)){
        abort(404);
    }

    $post = cache()->remember("post.{$slug}" , 5 , function() use ($path){
        return file_get_contents($path);
    });

    $post = file_get_contents($path);

    return view('post', [
        'post' => $post
    ]);*/
});
