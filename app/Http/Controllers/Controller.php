<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct () {
        $this->getCategories();
        $this->getRecentPosts();
    }
    public function getCategories ()
    {
        $categories =  Category::where('status', 'active')->whereNull('parent_id')->get();
        View::share(['categories' => $categories]);
        return $categories;
    }
    public function getRecentPosts ()
    {
        $recentPosts = Post::with('category')
        ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        View::share(['recentPosts' => $recentPosts]);
        return $recentPosts;
    }
}
