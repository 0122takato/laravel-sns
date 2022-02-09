<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {

        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index', ['articles' => $articles]);

        //以下の２パターンでも連想配列で第二引数に渡すことが可能。
        // return view('articles.index')->with(['articles'=>$articles]);
        // return view('articles.index', compact('articles'));

    }
}
