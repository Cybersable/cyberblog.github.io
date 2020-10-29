<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('pages.welcome');} )->name('home');

/*
    Blog
*/
Route::get('/articles', 'ArticleController@index' )->name('articles');
Route::get('/articles/{article:id}', 'ArticleController@show');
