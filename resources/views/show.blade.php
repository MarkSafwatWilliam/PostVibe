<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-6 max-w-3xl">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-5xl font-bold mb-6 leading-tight text-center">{{ $post->title }}</h1>
            <p class="text-sm text-gray-600 mb-6">By: {{ $post->user->username }} | {{ $post->created_at->format('M d, Y') }}</p>
            @if($post->image)
                <img class="w-full h-48 md:h-64 lg:h-72 xl:h-80 rounded-lg mb-6 object-cover" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            @endif
            <div class="prose prose-lg max-w-none">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
    </div>
</body>
</html>