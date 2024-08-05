<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPosts = Post::all();
        return view('admin.posts.index',
        [
            'allPosts' => $allPosts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allCategory = Category::all();
        return view('admin.posts.create',
        [
            'allCategory' => $allCategory,
        ]);

    }
    public function store(Request $request)
    {
        // dd($request->all());

       $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable',
        'category_id' => 'required|exists:categories,id',
        'content' => 'required|string',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/images');
        $imageName = basename($imagePath);
    } else {
        $imageName = null;
    }


    Post::create([
        'title' => $request->input('title'),
        'image' => $imageName,
        'category_id' => $request->input('category_id'),
        'content' => $request->input('content'),
        'view' => 0,
    ]);

    return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được tạo thành công.');
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
    $post = Post::findOrFail($id);
    $allCategory = Category::all();
    return view('admin.posts.update', [
        'post' => $post,
        'allCategory' => $allCategory,
    ]);
}


public function update(Request $request, string $id)
{
// dd($request->all());
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|file|image',
        'category_id' => 'required|exists:categories,id',
        'content' => 'required|string',

    ]);
    // dd($request->all());
    $post = Post::findOrFail($id);
    if ($request->hasFile('image')) {
        if ($post->image) {
            Storage::delete('public/images/' . $post->image);
        }

        $imagePath = $request->file('image')->store('public/images');
        $imageName = basename($imagePath);
    } else {
        $imageName = $post->image;
    }

    $post->update([
        'title' => $request->input('title'),
        'image' => $imageName,
        'category_id' => $request->input('category_id'),
        'content' => $request->input('content'),
    ]);
    return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được cập nhật thành công.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $post = Post::findOrFail($id);
    if ($post->image) {
        Storage::delete('public/images/' . $post->image);
    }
    $post->delete();

    return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được xóa thành công.');
}

}
