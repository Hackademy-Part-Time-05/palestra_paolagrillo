<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function store()
    {
        Article::create([
            'title' => 'Il mio secondo articolo',
            'author' => 'Giuseppe',
            'body' => '...'
        ]);
    }

    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }
}
