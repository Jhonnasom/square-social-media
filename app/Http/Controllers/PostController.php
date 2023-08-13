<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $posts = Post::with('user')
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

        return Inertia::render('Feed', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
