@extends('layouts.master')

@section('content')

	
      
        <div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Latest News
          </h3>

            @foreach($allnews as $news)

              <div class="blog-post">
                  <h2 class="blog-post-title"><a href="/articles/{{$news->id}}">{{ $news->title }}</a></h2>
                  <p class="blog-post-meta">{{$news->created_at->toFormattedDateString()}}</p>
                  <p> {{ $news->description }}</p>
              </div>

            @endforeach

         
        </div><!-- /.blog-main -->

        <hr>

      

    

@endsection