<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $posts = Post::with('user.media')
        ->withCount('comments')
        ->withCount('likes')
        ->withCount('shares')
        ->withCount('saveds')
        ->with('media')
        ->withCount(['likes as liked' => function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        }])
        ->withCount(['saveds as saved' => function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        }])
        ->addSelect(\DB::raw( $user_id . ' as auth_id'))
        ->orderBy('id', 'desc')->get();
        return response()->json($posts);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);
        $user_id = auth()->user()->id;
        $post = auth()->user()->posts()->create([
            'description' => $request->description,
        ]);

        if ($request->has('images')) {
          foreach ($request->images as $image) {
            $post->addMedia($image)->toMediaCollection('image_post');
          }
        }

        $post_created = Post::with('user.media')
        ->withCount('comments')
        ->withCount('likes')
        ->withCount('shares')
        ->withCount('saveds')
        ->with('media')
        ->withCount(['likes as liked' => function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        }])
        ->withCount(['saveds as saved' => function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        }])
        ->addSelect(\DB::raw( $user_id . ' as auth_id'))
        ->find($post->id);

        return $post_created;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $user_id = auth()->user()->id;
        $post_found = Post::with('user.media')
        ->withCount('comments')
        ->withCount('likes')
        ->withCount('shares')
        ->withCount('saveds')
        ->with('media')
        ->withCount(['likes as liked' => function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        }])
        ->withCount(['saveds as saved' => function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        }])
        ->addSelect(\DB::raw( $user_id . ' as auth_id'))
        ->find($post->id);

        return response()->json($post_found);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $post->update($request->all());

        return response()->json('Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post_found = auth()->user()->posts()->findOrFail($post->id);
        $post_found->delete();
        return response()->json('Post deleted!');

    }
}
