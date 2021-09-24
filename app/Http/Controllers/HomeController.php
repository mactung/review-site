<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    //
    
    public function index () {
        $featuredPosts = [
            'name' => 'Featured Reviews',
            'posts' => Post::with(['category', 'author'])
                        ->orderBy('created_at', 'desc')
                        ->limit(7)
                        ->get(),
        ];
        
        return View::make('index', compact(array('featuredPosts')));
    }
}
