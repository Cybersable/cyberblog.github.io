<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pages.articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('pages.articles.show', ['article' => $article]);
    }
}
