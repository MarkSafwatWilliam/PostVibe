<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    
    public function updatePost(Post $post, Request $request){
        if(auth()->user()->id !== $post['user_id']){
            return redirect('/posts');
        }
        
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Changed from 'required' to 'nullable'
        ]);
    
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        
        // Only handle image if new one is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $incomingFields['image'] = $request->file('image')->store('post-images', 'public');
        }
    
        $post->update($incomingFields);
    
        return redirect('/posts');
    }
    public function ShowEditPost(Post $post){
        if(auth()->user()->id !==$post['user_id']){
            return redirect('/posts');
        }
        return view('edit-post',['post'=>$post]);

    }
    
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
