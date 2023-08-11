<?php

namespace App\Http\Controllers\Api;

use App\Models\Share;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
      $shares = $post->shares()->orderBy('id', 'desc')->get();
      return response()->json($shares);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Post $post, Request $request)
    {
        return $share = auth()->user()->shares()->create([
          'post_id' => $post->id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Share $share)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Share $share)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, Share $share)
    {
        $share_found = auth()->user()->shares()->findOrfail($share->id);
        $share_found->delete();
        return response()->json('Share deleted!');
    }
}
