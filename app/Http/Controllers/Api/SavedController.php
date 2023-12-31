<?php

namespace App\Http\Controllers\Api;

use App\Models\Saved;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SavedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
      $saved = $post->saveds()->orderBy('id', 'desc')->get();
      return response()->json($saved);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Post $post, Request $request)
    {
        $saved = auth()->user()->saveds()->where('post_id', $post->id)->first();

        if ($saved != null) {
          $saved->delete();
          return response()->json('Post Unsaved!');
        } else {
          return $saved = auth()->user()->saveds()->create([
            'post_id' => $post->id,
          ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Saved $saved)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saved $saved)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saved $saved)
    {
        $saved_found = auth()->user()->saved()->findOrfail($saved->id);
        $saved_found->delete();
        return response()->json('Unsaved!');
    }
}
