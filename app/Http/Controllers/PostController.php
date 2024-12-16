<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        // Sanitize the 'title' and 'body' fields to remove any HTML tags
        // This helps protect against potential cross-site scripting (XSS) attacks
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);


        // Laravel provides the auth() helper to access the currently logged-in user's information.
        // Retrieves the id of the currently authenticated user.
        $incomingFields['user_id'] = auth()->id();
        
        // Use the Post model to create a new record in the 'posts' table
        // The 'create' method inserts the sanitized and validated data
        Post::create($incomingFields);
        return redirect('/posts');
    }}
