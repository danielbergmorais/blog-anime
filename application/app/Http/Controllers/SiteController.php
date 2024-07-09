<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{
    public function __construct()
    {
        View::share('navCategories', Category::where('active', 1)->get());
        View::share('sidebarPosts', Post::where('active', 1)->limit(5)->get());
    }

    public function index()
    {
        return view('site.index', [
            'bannerPosts' => Post::where('active', 1)->limit(3)->get(),
            'indexPosts' => Post::where('active', 1)->limit(9)->offset(3)->get(),
        ]);
    }

    public function posts(Category $category)
    {
        if ($category->active) {
            $posts = Post::where(['category_id' => $category->id, 'active' => 1])->paginate(12);
        } else {
            $posts = Post::where('active', 1)->paginate(12);
        }

        return view('site.pages.posts', [
            'category' => $category->active ? $category : null,
            'posts' => $posts
        ]);
    }

    public function post(Post $post)
    {
        if ($post && !$post->active) {
            return Redirect::route('site');
        }

        if ($post->youtube) {
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $post->youtube, $match);
            $youtube_id = $match[1];
            $post->youtube = 'https://www.youtube.com/embed/' . $youtube_id;
        }
        return view('site.pages.details', [
            'post' => $post
        ]);
    }
}
