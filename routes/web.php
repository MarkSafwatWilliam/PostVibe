<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignUpController;

// Login routes
Route::get('/login', [LoginController::class, 'index'])->name('login'); // Name it for redirects
Route::post('/login', [LoginController::class, 'login']);

// Signup routes
Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'register']);

// Middleware to protect authenticated routes
Route::middleware(['auth'])->group(function () {
    // Home page (welcome)
    //with all the posts the static one and all the posts in the database
    Route::get('/', function () {
        $posts = Post::latest()->get();
        return view('welcome', ['posts' => $posts]);
    });
    

    // Posts page
    Route::get('/posts', function () {
        $posts = auth()->user()->usersCoolPosts()->latest()->get();
        return view('posts', ['posts' => $posts]);
    });

    // Create a new post form
    Route::get('/create-new', function () {
        return view('create-new');
    });
    // Contact us page
    Route::get('/contact', function () {
        return view('contact');
    });

    // Logout route
    Route::post('/signout', [LogoutController::class, 'logout']);



    // post related routes
    Route::post('/create-post', [PostController::class, 'createPost']);
    Route::get('/edit-post/{post}', [PostController::class, 'ShowEditPost']);
    Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
}); 




?>