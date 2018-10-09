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
        $articles = Article::where('is_live', 1)->get();
        return view('article.show')->with(compact('article', 'articles'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sessions()
    {
        $articles = Article::where('is_live', 1)->get();

        return view('sessions')->with(compact('articles'));
    }

   /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv()
    {
        //$articles = Article::where('is_live', 1)->get();

        return view('cv');
    }
}
