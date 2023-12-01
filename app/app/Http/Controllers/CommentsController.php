<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    // Edit comment
    public function edit(Comment $comment) {
        return view('comments.edit', [
            'comment' => $comment
        ]);
    }

    // Update comment
    public function update(Request $request, Comment $comment) {
        $comment->update(['content' => $request->comment]);
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
