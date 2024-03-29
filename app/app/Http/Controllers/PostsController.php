<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    // Show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::published()->latest()->get(),
            'last_posts' => Post::published()->latest()->limit(5)->get(),
            'categories' => Category::all()
        ]);
    }

    // Show single post
    public function show(Post $post) {
        $post->increment('visits_count');
        return view('posts.single', [
            'categories' => Category::all(),
            'last_posts' => Post::published()->latest()->limit(5)->get(),
            'post' => $post
        ]);
    }

    // Show form to add post
    public function create() {
        return view('posts.create', [
            'categories' => Category::all()
        ]);
    }

    // Store post data
    public function store(PostRequest $request) {

        $validated = $request->validated();

        $validated['user_id'] = auth()->user()->id;
        $validated['slug'] = Str::slug($validated['title'], '-');

        $post = Post::create($validated);

        return redirect()->route('posts.edit', $post)
            ->with('info', 'Post has been created successfully');
    }

    // Show form to edit post
    public function edit(Post $post) {
        return view('posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    // Update post data
    public function update(PostRequest $request, Post $post) {

        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['title'], '-');

        $post->update($validated);
        return back()->with('info', 'Post has been updated successfully');
    }

    // Delete post
    public function destroy(Post $post) {
        $post->delete();
        $post->comments()->delete();
        return back()->with('info', 'Post has been deleted successfully');
    }
}
