
@extends('layouts.master')

@section('content')

@if(count($articles))
@foreach($articles as $article)
    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{$article->title}}</h2>
            <p class="blog-post-meta">by <a href="#">{{$article->user->name}}</a></p>
            <p>From category <a href="{{url('/articles?category='.$article->category->id)}}">{{$article->category->name}}</a> </p>

            <p>{{$article->body}}</p>

            <br>
            @if(auth()->check() && auth()->user()->id == $article->user_id)
                <a href="{{route('articles.edit',['id' => $article->id])}}" type="button" class="btn btn-primary">Edit</a>
                <a href="{{route('articles.destroy',['id' => $article->id])}}" type="button" class="btn btn-danger">Delet</a>
            @endif
           
        </div><!-- /.blog-post -->
        @if(!$loop->last)
            <hr>
        @endif
    </div>
@endforeach

@else
  no posts yet
@endif
@endsection
