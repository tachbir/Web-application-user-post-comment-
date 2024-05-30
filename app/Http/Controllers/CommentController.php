<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Add a constructor to define middleware
    public function __construct()
    {
        // Apply auth middleware to all methods
        $this->middleware('auth');
    }

    public function store(Request $request, $postId)
    {
        $request->validate(['content' => 'required']);

        Comment::create([
            'content' => $request->content,
            'post_id' => $postId,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.show', $postId);
    }
}

