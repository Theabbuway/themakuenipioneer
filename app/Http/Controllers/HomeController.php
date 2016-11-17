<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use App\Image;

class HomeController extends Controller
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
        $articles = Article::all();
        $images = Image::all();
        return view('welcome',['articles' => $articles, 'images' => $images]);
    }

    public function showArticle($id)
    {
        $article = Article::find($id);
        return view('home.show_article',['article' => $article]);
    }

    public function getGallery()
    {
        $images = Image::all();
        $categories = ['1','2','3','4','5'];
        $sorts = ['Busy streets','Luminous night','City wonders','In production','Industrial site','Peaceful lake','Dreamhouse','City lights'];
        return view('home.gallery',['images' => $images, 'categories' => $categories,'sorts' => $sorts]);
    }

    public function getAbout()
    {
        return view('home.about');
    }

    public function getContact()
    {
        return view('home.contact');
    }
}
