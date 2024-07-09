<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Rules\YouTubeUrl;

class PostController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if (!$user->admin) {
            $posts = Post::where('user_id', $user->id)->paginate(10);
        } else {
            $posts = Post::Paginate(10);
        }

        return view('admin.pages.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.posts.create', [
            'categories' => $categories
        ]);
    }

    public function edit(Post $post)
    {

        if (!$post->isOwnedByAuthUser()) {
            return redirect()->route('posts.index')->with('error', 'Você não tem permissão para editar este post.');
        }

        $categories = Category::all();
        if ($post) {
            return view('admin.pages.posts.edit', [
                'post' => $post,
                'categories' => $categories
            ]);
        } else {
            return Redirect::back()->with('error', 'Post não encontrado');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'string',
            'content' => 'required|string',
            'active' => 'required|integer',
            'category_id' => 'required|integer',
            'youtube' => [new YouTubeUrl]
        ], [
            'title' => 'O titulo não pode ser vazio',
            'subtitle' => 'O subtitulo não pode ser vazio',
            'content' => 'O conteúdo do post não pode ser vazia',
            'category_id' => 'A categoria não pode ser vazia',
        ]);

        $user = auth()->user();
        if ($request->Hasfile('image')) {
            $file = $request->file('image');
            $file->store('blog', 'public');
            $request->merge(['file' => $file->hashName()]);
            $request->merge(['user_id' => $user->id]);
        }

        if (Post::create($request->all())) {
            return Redirect::route('posts.index');
        } else {
            return Redirect::back()->with('error', 'Preecha todos os campos');
        }
    }

    public function update(Request $request, Post $post)
    {

        if (!$post->isOwnedByAuthUser()) {
            return redirect()->route('posts.index')->with('error', 'Você não tem permissão para editar este post.');
        }

        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'string',
            'content' => 'required|string',
            'active' => 'required|integer',
            'category_id' => 'required|integer',
            'youtube' => [new YouTubeUrl]
        ], [
            'title' => 'O titulo não pode ser vazio',
            'subtitle' => 'O subtitulo não pode ser vazio',
            'content' => 'O conteúdo do post não pode ser vazia',
            'category_id' => 'A categoria não pode ser vazia',
        ]);

        if ($request->Hasfile('image')) {
            $file = $request->file('image');
            $file->store('blog', 'public');
            $request->merge(['file' => $file->hashName()]);
            $request->merge(['user_id' => 1]);
        }

        if ($post->update($request->all())) {
            return Redirect::route('posts.index');
        } else {
            return Redirect::back()->with('error', 'Preecha todos os campos');
        }
    }

    public function destroy(Post $post)
    {
        if (!$post->isOwnedByAuthUser()) {
            return redirect()->route('posts.index')->with('error', 'Você não tem permissão para editar este post.');
        }

        if ($post->delete()) {
            return redirect()->route('posts.index')->with('success', 'Post excluido com sucesso');
        } else {
            return redirect()->route('posts.index')->with('error', 'Não foi possivel excluir esse post');
        }
    }
}
