<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    // Store comment
    public function store(CommentRequest $request, Post $post) {

        $validated = $request->validated();

        $validated['post_id'] = $post->id;
        $validated['user_id'] = Auth::user()->id;
        $validated['approved'] = true;

        Comment::create($validated);

        return redirect()->route('posts.single', $post->slug)
            ->with('info', 'Comment has been created successfully');
    }

    // Edit comment
    public function edit(Comment $comment) {
        return view('comments.edit', ['comment' => $comment]);
    }

    // Update comment
    public function update(CommentRequest $request, Comment $comment) {
        $comment->update($request->validated());
        return back()->with('info', 'Comment has been updated successfully');
    }

    // Approve comment
    public function approve(Comment $comment) {
        $comment->update(['approved' => true]);
        return back()->with('info', 'Comment has been approved successfully');
    }

    // Delete comment
    public function destroy(Comment $comment) {
        $comment->delete();
        return back()->with('info', 'Comment has been deleted successfully');
    }
}
