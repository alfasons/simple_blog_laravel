@extends('layout')
@section('title','Show')
@section('content')


    <div class="post-item">
        <div class="post-content">
                <h2>{{$post->title}}</h2>
                <p>{{$post->description}}</p>
                   @can('update', $post)
                        <a href="{{route('posts.edit',[$post])}}"> Edit Post</a>
                   @endcan

                 @can('delete', $post)
                         <form method="POST" action="{{route('posts.destroy',$post)}}">
                    @csrf
                    @method('DELETE')
                    

                     <button class="delete" type="submit">delete post</button>
                </form>
                   @endcan
               
        </div>

    </div>

 

@endsection    
  
   

