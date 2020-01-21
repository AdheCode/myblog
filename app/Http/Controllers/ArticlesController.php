<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArticlesController extends Controller
{

    public function index() {

        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }


        return view('articles.index', compact('articles'));
    }

    public function show(Article $article) {
//        $article = Article::findOrFail($id);

        return view('articles.article', compact('article'));
    }

    public function create() {

        $tags = Tag::all();

        return view('articles.create', compact('tags'));
    }

    public function store() {

        $validation = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags, id',
        ]);

//        $article = new Article();

//        $article->title = request('title');
//        $article->excerpt = request('excerpt');
//        $article->body = request('body');

//        $article->save();

        $article = new Article($validation);

        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

//        Article::create($validation);

        return redirect(route('articles'));
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

        return redirect(route('articles.show', $article));
    }
}
