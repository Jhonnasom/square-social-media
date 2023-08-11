<?php

namespace App\Http\Controllers\Api;

use App\Models\Like;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
      $likes = $post->likes()->orderBy('id', 'desc')->get();
      return response()->json($likes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Post $post, Request $request)
    {
        $like = auth()->user()->likes()->where('post_id', $post->id)->first();

        if ($like == null) {
          return $like = auth()->user()->likes()->create([
            'post_id' => $post->id,
          ]);
        } else {
          return response()->json('Like already exists!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, Like $like)
    {
        $like_found = auth()->user()->likes()->findOrfail($like->id);
        $like_found->delete();
        return response()->json('Like deleted!');
    }
}
