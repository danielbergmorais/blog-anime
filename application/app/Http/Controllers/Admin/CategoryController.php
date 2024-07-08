<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::Paginate(10);
        return view('admin.pages.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function edit(Category $category)
    {
        if ($category) {
            return view('admin.pages.categories.edit', [
                'category' => $category
            ]);
        } else {
            return  Redirect::back()->withErrors(['msg' => 'Categoria não encontrada']);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'active' => 'required|integer',
        ]);

        if (Category::create($request->all())) {
            return Redirect::route('categories.index');
        } else {
            return Redirect::back()->with('error', 'Preecha todos os campo');
        }
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string',
            'active' => 'required|integer',
        ]);

        if ($category->update($request->all())) {
            return Redirect::route('categories.index');
        } else {
            return Redirect::back()->withErrors(['msg' => 'Preecha todos os campos']);
        }
    }

    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return redirect()->route('categories.index')->with('success', 'Categoria excluida com sucesso');
        } else {
            return redirect()->route('categories.index')->with('error', 'Não foi possivel excluir essa categoria');
        }
    }
}
