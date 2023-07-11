<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;


class PostController extends Controller
{
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostFormRequest $request)
    {
      $validated=  $request->validated();

        //$post = Post::create($validated);

        $post = $request->user()->posts()->create($validated);//create poast with logged in user
      

        return redirect()
            ->route('posts.show',$post)
            ->with('success', 'successfully created post title' . $post->title . ' description ' . $post->description);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        return view('posts.show',[
            'post'=>$post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostFormRequest $request, Post $post)
    {
        $this->authorize('update', $post);
        $validated= $request->validated();
      //  $post = Post::create($validated);
        $post = $request->user()->posts()->create($validated);//create poast with logged in user
      
      
        
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()
            ->route('posts.show',[$post])
            ->with('success', 'successfully updated post title' . $post->title );

   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(POST $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()
            ->route('home')
            ->with('success', 'successfully deleted');
    }
}
