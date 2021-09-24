<?php

namespace App\Http\Controllers;

use App\Models\Category;
use View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index (Request $reuest, $slug)
    {
        $category = Category::with('posts')->where('slug', $slug)->first();
        if (!$category) {
            abort(404);
        }
        return View::make('category.index', ['category' => $category]);
    }
}
