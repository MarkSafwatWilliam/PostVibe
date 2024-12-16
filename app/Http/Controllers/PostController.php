<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Sanitize 'title' and 'content'
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        $incomingFields['user_id'] = auth()->id();
    
        // Save the uploaded image
        $incomingFields['image'] = $request->file('image')->store('post-images', 'public');
    
        // Save to the database
        Post::create($incomingFields);
    
        return redirect('/posts');
    }}
