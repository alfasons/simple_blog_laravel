@extends('layout')
@section('title','update New Post')
@section('content')

        <h1>Update post : {{$post->title}}</h1>
        <form method="POST" action="{{route('posts.update',[$post])}}">
           @csrf
           @method('PUT')
            <label>Title</label>
            <input type="text" name="title" value="{{old('title',$post->title)}}" class="@error('title') error-border @enderror">
                @error('title')
                <div class="error">
                    {{$message}}            
                </div>                  
                @enderror
            <label>Description</label>
            <textarea name="description" class="@error('description') error-border @enderror">{{old('description',$post->description)}}</textarea>
             @error('description')
                <div class="error">
                    {{$message}}            
                </div>                  
                @enderror

            <button type="submit">update</button>
        </form>
    @endsection
   