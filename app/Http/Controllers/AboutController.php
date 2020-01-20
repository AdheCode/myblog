<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class AboutController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = new Article;
        $articles = $article->latest()->get();
        return view('about', compact('articles'));
    }
}
