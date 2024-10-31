<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/projetos', function () {
    return view('projetos');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produto', function () {
    return view('produto1');
});

Route::get('/projeto', function () {
    return view('projeto1');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/post', function () {
    return view('post1');
});