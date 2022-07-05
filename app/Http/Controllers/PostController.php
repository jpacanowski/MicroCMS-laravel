<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post
            ::whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(string $slug) {

        return view('posts.post', [
            'post' => Post::whereSlug($slug)->first()
        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'post_title' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->input('post_title'),
            'content' => $request->input('post_content'),
            'slug' => Str::slug($request->input('post_title', '-')),
            'excerpt' => '',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        return redirect()
            ->to('dashboard/post/edit/' . $post->id)
            ->with('info', 'Post has been added successfully');
    }

    public function update(int $postId, Request $request) {

        $this->validate($request, [
            'post_title' => 'required',
        ]);

        Post::whereId($postId)->update([
            'title' => $request->input('post_title'),
            'content' => $request->input('post_content'),
            'slug' => Str::slug($request->input('post_title', '-')),
        ]);

        return redirect()
            ->to('dashboard/post/edit/' . $postId)
            ->with('info', 'Post has been edited successfully');
    }
}
