<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'comment_text' => 'required|string|max:10000',
        ], [
            'comment_text.required' => 'Komentar tidak boleh kosong.',
            'comment_text.max' => 'Komentar maksimal 10.000 karakter.',
        ]);

        $commentText = trim($request->comment_text);

        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $post->id,
            'comment_text' => $commentText,
        ]);

        return redirect()->route('forum.show', $post)
            ->with('status', 'Komentar berhasil ditambahkan!');
    }

    public function destroy(Post $post, Comment $comment)
    {
        abort_if($comment->user_id !== Auth::id(), 403);
        $comment->delete();

        return redirect()->route('forum.show', $post)
            ->with('status', 'Komentar berhasil dihapus!');
    }
}
