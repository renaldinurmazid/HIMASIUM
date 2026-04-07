<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kepanitiaanPosts = Post::where('status', 'published')
            ->whereHas('category', function ($query) {
                $query->where('slug', 'kepanitiaan')
                    ->orWhere('name', 'Kepanitiaan');
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.home.index', compact('kepanitiaanPosts'));
    }
}
