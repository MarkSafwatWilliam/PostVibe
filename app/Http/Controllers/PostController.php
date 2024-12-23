<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
  public function show($id)
  {
    $post = Post::findOrFail($id);
    return view('show', compact('post'));
  }

  public function updatePost(Post $post, Request $request)
  {
    if (auth()->user()->id !== $post['user_id']) {
      return redirect('/posts');
    }

    $incomingFields = $request->validate([
      'title' => 'required',
      'content' => 'required',
      'image' => 'nullable|image|max:2048', // Removed 'mimes' rule
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

  public function ShowEditPost(Post $post)
  {
    if (auth()->user()->id !== $post['user_id'] && auth()->user()->is_admin != 1) {
      return redirect('/posts');
    }
    return view('edit-post', ['post' => $post]);
  }

  public function createPost(Request $request)
  {
    $incomingFields = $request->validate([
      'title' => 'required',
      'content' => 'required',
      'image' => 'required|image|max:2048', // Removed 'mimes' rule
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
  }

  public function deletePost(Request $request, $postId)
  {
    $post = Post::findOrFail($postId);
    if (!$post) {
      return redirect('/posts')->with('error', 'Post not found');
    }
    if (auth()->user()->id !== $post['user_id'] && auth()->user()->is_admin != 1) {
      return redirect('/posts')->with('error', 'Unauthorized action');
    }
    if ($post->image) {
      Storage::disk('public')->delete($post->image);
    }

    $post->delete();
    return redirect('/posts');
  }
}
