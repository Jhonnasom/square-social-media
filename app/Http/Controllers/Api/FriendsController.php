<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // List of friends
        $sort = 'desc';
        if (request()->has('sort')) {
          $sort = request()->input('sort');
        }

        $friends = User::with('media')->where('id', '<>', auth()->user()->id)
        ->orderBy('id', $sort)->get();
    
        return response()->json($friends);
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
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
