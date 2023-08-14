<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $sort = 'desc';
      if (request()->has('sort')) {
        $sort = request()->input('sort');
      }

        $posts = auth()->user()->posts()
        ->has('media')->with('media')
        ->orderBy('id', $sort)->get();

        $images = [];
        if ($posts != null) {
          foreach ($posts as $post) {
            foreach ($post->getMedia('image_post') as $image) {
              array_push($images, $image->original_url);
            }
          }
        }

        return response()->json($images);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
