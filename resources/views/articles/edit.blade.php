@extends('layouts.master')

@section('content')

<form action="{{route('articles.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label>Post title:</label>
      <input type="text" name="title" class="form-control" value="{{$article->title}}" required>
    </div>
    <div class="form-group">
        <label>Post body</label>
        <textarea name="body" class="form-control" rows="3">{{$article->body}}</textarea>
    </div>
    <div class="form-group">
        <label >Category</label>
        <select name="cat_id" class="form-control" id="exampleFormControlSelect2">
            @foreach ($categories as $category)
                
                <option {{$article->category->id == $category->id ?'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection