@extends('layouts.master')

@section('content')

	<div class="blog-post">
            <h2 class="blog-post-title">{{ $article->title}}</h2>
            <p class="blog-post-meta">{{ $article->description}}</a></p>

            <p>{{ $article->body}}</p>

            <a href="/articles/{{$article->id}}/edit" class="btn btn-primary btn-lg">Edit Article</a>

    </div><!-- /.blog-post -->

@endsection