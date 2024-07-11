<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;


/**********SITE***************/
Route::get('/', [SiteController::class, 'index'])->name('site');
Route::get('/posts/{category?}', [SiteController::class, 'posts'])->name('site.posts');
Route::get('/post/{post}', [SiteController::class, 'post'])->name('site.post');
Route::get('/resultados', [SiteController::class, 'search'])->name('site.search');

/**********ADMIN***************/
Route::get('/admin/perfil', function () {
    return view('admin.pages.profile');
})->name('admin.perfil');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('posts', PostController::class)->except(['show']);
});

/**********AUTH***************/
require __DIR__ . '/auth.php';
