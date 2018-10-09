<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Maria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maria = Maria::find(1);
        $articles = Article::where('is_live', 1)->get();
        return view('home')->with(compact('articles', 'maria'));
    }
}
