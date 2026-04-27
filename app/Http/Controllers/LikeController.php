<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;

class LikeController extends Controller
{
    // Suka/batal suka postingan
    public function toggle(Post $post)
    {
        $userId = Auth::id();

        $existing = Like::where('user_id', $userId)
                        ->where('post_id', $post->id)
                        ->whereNull('comment_id')
                        ->first();
        
        if ($existing) {
            $existing->delete();
            $liked = false;
        } else {
            Like::create([
                'user_id' => $userId,
                'post_id' => $post->id,
                'comment_id' => null,
            ]);
            $liked = true;
        }

        $count = Like::where('post_id', $post->id)->whereNull('comment_id')->count();

        return response()->json([
            'liked' => $liked,
            'count' => $count,
        ]);
    }

    // Suka/batal suka komentar
    public function toggleComment(Post $post, Comment $comment)
    {
        $userId = Auth::id();

        $existing = Like::where('user_id', $userId)
                        ->where('comment_id', $comment->id)
                        ->first();
        
        if ($existing) {
            $existing->delete();
            $liked = false;
        } else {
            Like::create([
                'user_id' => $userId,
                'post_id' => $post->id,
                'comment_id' => $comment->id,
            ]);
            $liked = true;
        }

        $count = Like::where('comment_id', $comment->id)->count();

        return response()->json([
            'liked' => $liked,
            'count' => $count,
        ]);
    }
}
