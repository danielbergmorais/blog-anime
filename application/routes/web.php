<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('site.index');
});

Route::get('/noticias', function () {
    return view('site.pages.categories');
});

Route::get('/noticia', function () {
    return view('site.pages.details');
});

Route::get('/categorias', function () {
    return view('site.pages.categories');
});

Route::get('/login', function () {
    return view('site.pages.login');
});

Route::get('/404', function () {
    return view('errors.404');
});


/**********ADMIN***************/

Route::get('/admin', function () {
    return view('admin.pages.news');
})->name('admin');

Route::get('/admin/noticias', function () {
    return view('admin.pages.news');
})->name('admin.noticias');

Route::get('/admin/perfil', function () {
    return view('admin.pages.profile');
})->name('admin.perfil');

Route::get('/admin/noticia/novo', function () {
    return view('admin.pages.news-form');
})->name('admin.noticias.novo');



Route::group(['prefix' => 'admin'], function () {
    Route::resource('categories', CategoryController::class)->except(['show']);
});
