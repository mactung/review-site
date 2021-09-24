<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use View;

class PostController extends Controller
{
    //
    public function index (Request $request, $slug)
    {
        $post = Post::with('category')->where('slug',$slug)->first();
        if (!$post) {
            abort(404);
        }
        return View::make('post.index', ['post' => $post]);
    }
}
