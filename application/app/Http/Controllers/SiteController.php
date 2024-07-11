<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function __construct()
    {
        View::share('navCategories', Category::where('active', 1)->get());
        View::share('sidebarPosts', Post::where('active', 1)->limit(5)->get());
    }

    public function index()
    {
        $latestPosts = Post::select('id', 'category_id')
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('posts')
                    ->groupBy('category_id');
            });

        $posts = Post::whereIn('id', $latestPosts->pluck('id'))->limit(3)->with('category')->get();
        $indexPosts = Post::whereNotIn('id', $latestPosts->pluck('id'))->limit(9)->get();

        return view('site.index', [
            'bannerPosts' => $posts,
            'indexPosts' => $indexPosts,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('busca');

        $posts = Post::where('title', 'like', '%' . $query . '%')
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%');
            })
            ->with('category')
            ->get();

        return view('site.pages.posts', [
            'category' => 'Busca',
            'posts' => $posts
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
            'category' => $category->active ? $category->name : null,
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
