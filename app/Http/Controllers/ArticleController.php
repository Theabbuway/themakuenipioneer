<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $articles = Article::all();

        return view('articles.index',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image'))
        {
            $image_name = 'img_'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $counter = 1;
            while(file_exists(public_path().'/uploads/'.$image_name))
            {
                $image_name = 'img_'.time().'_'.$counter.'.'.$request->file('image')->getClientOriginalExtension();
                $counter ++;
            }
            $request->file('image')->move(public_path().'/uploads/', $image_name);
        }
        else{
            $image_name = null;
        }
        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body,
            //'image' => $image_name
        ]);

        return redirect('articles')->with('id', $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show',['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit',['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if($request->file('image')){
            if($article->image)
            {
                $image_name = $article->image;
            }
            else
            {
                $image_name = 'img_'.time().'.'.$request->file('image')->getClientOriginalExtension();
                $counter = 1;
                while(file_exists(public_path().'/uploads/'.$image_name))
                {
                    $image_name = 'img_'.time().'_'.$counter.'.'.$request->file('image')->getClientOriginalExtension();
                    $counter ++;
                }
            }

            $request->file('image')->move(public_path().'/uploads/', $image_name);
        }

        $article->update(['title' => $request->title,
                        'body' => $request->body,
                        //'image' => $image_name
        ]);

        return redirect('articles')->with('id', $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('articles');
    }
}
