<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article) {
//        $article = Article::findOrFail($id);

        return view('articles.article', compact('article'));
    }

    public function create() {

        return view('articles.create');
    }

    public function store() {

        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/');
    }

    public function edit(Article $article) {
//        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) {

        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

//        $article = Article::findOrFail($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/'.$article->id);
    }
}
