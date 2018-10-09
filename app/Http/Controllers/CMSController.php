<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Maria;
use Session;
use Illuminate\Http\File;

class CMSController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')
                ->get();
        return view('cms')->with(compact('articles'));
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

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;

        if( $this->storeImage($request))
        {
            $article->image_name = $request->image->getClientOriginalName();
        }

        $article->title = $request->title;
        $article->article = $request->article;
        $article->description = $request->description;
        $article->is_live = $request->isLive ? 1 : 0;
        $article->media_type = $request->media_type;
        $article->video_url = $request->video;

        $article->save();

        Session::flash('message', 'Article created successfully!');

        return redirect('/cms');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        
        return view('article.edit')->with(compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $article = Article::findorfail($id); 

        if($request->file('image'))
        {
            if( $this->storeImage($request))
            {
                $article->image_name = $request->image->getClientOriginalName();
            }
        }

        $article->title = $request->title;
        $article->article = $request->article;
        $article->description = $request->description;
        $article->is_live = $request->isLive ? 1 : 0;
        $article->media_type = $request->media_type;
        $article->video_url = $request->video;

        $article->save();
       
        Session::flash('message', 'Article updated successfully!');

        return redirect('/cms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        // redirect
        Session::flash('message', 'The Article deleted successfully!');
        return redirect('/cms');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function allLiveArticles()
    {
        $articles = Article::where('is_live', 1)->get();
        return view('article.live_articles')->with(compact('articles'));
    }

    private function storeImage($request) : bool
    {
        if ($request->file('image')->isValid()) 
        {
            $image = $request->file('image');
            $image_name = $request->image->getClientOriginalName(); 
            $image->move(public_path('/uploaded_images/'), $image_name);

            return true;
        }

        return false;
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function sessionsUpdate()
    {
        $maria = Maria::find(1);
        $articles = Article::where('is_live', 1)->get();
        return view('sessions_update')->with(compact('articles', 'maria'));
    }

    public function updateSession(Request $request)
    {
        $maria = Maria::find(1);

        $maria->session = $request->session;

        $maria->save();
       
        return redirect('/sessions/update');
    }
       
}
