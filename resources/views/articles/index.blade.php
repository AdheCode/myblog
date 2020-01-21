@extends('layouts.layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse ($articles as $article)
            <div id="content">
                <div class="title">
                    <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h2>
                    <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <p>{{ $article->body }}</p>
            </div>
            @empty
                <p>No relevant articles yet.</p>
            @endforelse
        </div>
    </div>
@endsection
