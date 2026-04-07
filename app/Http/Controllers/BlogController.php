<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        $category = Category::select('id', 'name', 'slug')->get();
        
        $posts = Post::where('status', 'published')
            ->with(['category', 'user'])
            ->latest('published_at');

        if ($request->has('category')) {
            $posts->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $posts = $posts->get();

        return view("pages.blog.index", compact("category", "posts"));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view("pages.blog.show", compact('post'));
    }
}
