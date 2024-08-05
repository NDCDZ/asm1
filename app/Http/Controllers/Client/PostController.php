<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPosts = Post::all();
        $FourPosts = Post::latest()->take(4)->get();
        $OnePosts = Post::latest()->first();
        $NewPosts = Post::latest()->take(4)->get();
        $HotPosts = Post::orderBy('view', 'desc')->take(4)->get();
        $RamdomPosts = Post::inRandomOrder()->take(4)->get();
        return view("client.home",
        [
            'allPosts' => $allPosts,
            'FourPosts' => $FourPosts,
            'OnePosts' => $OnePosts,
            'NewPosts' => $NewPosts,
            'HotPosts' => $HotPosts,
            'RamdomPosts' =>$RamdomPosts
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function blog()
    {
        $allPosts = Post::all();
        $NewPosts = Post::latest()->take(4)->get();
        $RamdomPosts = Post::inRandomOrder()->take(4)->get();
        $HotPosts = Post::orderBy('view', 'desc')->take(4)->get();
        return view("client.blog",
        [
            'allPosts' => $allPosts,
            'NewPosts' => $NewPosts,
            'RamdomPosts' =>$RamdomPosts,
            'HotPosts' => $HotPosts,
        ]);
    }
    public function single(string $id)
    {
        $RamdomPosts = Post::inRandomOrder()->take(4)->get();
        $HotPosts = Post::orderBy('view', 'desc')->take(4)->get();
        $OnePosts = Post::latest()->first();
        $post = Post::findOrFail($id);
        return view("client.single",
        [
            'RamdomPosts' =>$RamdomPosts,
            'HotPosts' => $HotPosts,
            'OnePosts' => $OnePosts,
            'post' => $post
        ]);
    }
    public function contact_us()
    {
        return view("client.contact_us");
    }

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

        return view("client.single",
        [

        ]);
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
