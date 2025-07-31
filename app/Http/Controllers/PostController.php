<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->load('comments'); // Eager load the comments relationship

        return view('posts.show', compact('post'));
    }   

    public function storeComment(Request $request, Post $post)
    {
        // 1. Validate the comment content
        $request->validate([
            'comment_content' => 'required|min:3|max:500',
        ]);

        // 2. Create the new comment
        $comment = new Comment();
        $comment->comment_content = $request->input('comment_content');
        $comment->user_id = Auth::id(); // Get the ID of the authenticated user
        $comment->post_id = $post->id; // Link the comment to the current post

        // 3. Save the comment to the database
        $comment->save();

        // 4. Redirect back to the post page with a success message
        return back()->with('success', 'Comment added successfully!');
    }
}