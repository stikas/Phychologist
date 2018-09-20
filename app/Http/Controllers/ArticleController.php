<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Session;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('is_live', 1)->get();
        return view('article.live_articles')->with(compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('id', $id)->where('is_live', 1)->firstOrFail();
        return view('article.show')->with(compact('article'));
    }
}
