<?php

use Illuminate\Support\Facades\Route;


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
