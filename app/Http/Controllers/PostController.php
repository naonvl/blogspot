<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('content.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('content.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
          "title"=>$request->title,
          "content"=>$request->content,
          "author"=>$request->author,
        ]);
        return view('content.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $pageConfigs = ['myLayout' => 'blank'];
      $post = Post::find($id);
      return view('content.post.show', compact('post','pageConfigs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
