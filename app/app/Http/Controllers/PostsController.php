<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    // Show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->get()
        ]);
    }

    // Show single post
    public function show(Post $post) {
        return view('posts.single', [
            'post' => $post
        ]);
    }

    // Show form to edit post
    public function edit(Post $post) {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    // Update post data
    public function update(Request $request, Post $post) {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $formFields['slug'] = Str::slug($formFields['title'], '-');

        $post->update($formFields);
        return back()->with('info', 'Post has been updated successfully');
    }

    // Delete post
    public function destroy(Post $post) {
        $post->delete();
        return back()->with('info', 'Post has been deleted successfully');
    }
}
