<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
      $comments = $post->comments()->orderBy('id', 'desc')->get();
      return response()->json($comments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Post $post, Request $request)
    {
      $request->validate([
        'description' => 'required',
      ]);

      return auth()->user()->comments()->create([
        'description' => $request->description,
        'post_id' => $post->id,
      ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post, Request $request, Comment $comment)
    {
      $request->validate([
        'description' => 'required',
      ]);

      $comment->update([
        'description' => $request->description,
      ]);

      return response()->json('Comment updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, Comment $comment)
    {
      $comment_found= auth()->user()->comments()->findOrFail($comment->id);
      $comment_found->delete();
      return response()->json('Comment deleted!');
    }
}
