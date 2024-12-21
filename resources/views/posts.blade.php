<x-layout>
    <section class="container mx-auto py-8 px-4 min-h-[calc(100vh-80px)] flex flex-col items-center">
        @if ($posts->isEmpty())
            <div class="flex flex-col justify-center items-center h-full bg-blue-500 text-gray-300 py-8 px-4 rounded-lg">
                <div class="text-center text-2xl mt-20 text-gray-100">
                    😞 No Posts yet
                </div>

                <div class="flex justify-center mt-8">
                    <a href="/create-new" class="bg-white text-blue-500 font-bold py-2 px-4 rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                        Create Post
                    </a>
                </div>
            </div>
        
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                {{-- Display published posts --}}
                {{-- Symbolic Link: Laravel stores the public files in the storage directory but this is not directly accessible by the browser.
                You need to create a symbolic link so that files in storage can be accessed publicly.
                Run this command " php artisan storage:link " --}}

                @foreach ($posts as $post)
                <div class="post-card shadow-md rounded-lg overflow-hidden" style="position: relative">
                    <!-- Display the uploaded image -->
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-full h-40 object-cover">

                    <div class="p-4">
                        <h4 class="text-xl font-semibold mb-2 text-center">{{ $post->title }}</h4>
                        <p class="text-sm text-gray-600 text-center">
                            {{ $post->user->username }} | {{ $post->created_at->format('F d, Y') }}
                        </p>

                        {{-- the content part --}}
                        <p class="text-sm text-gray-600 text-center">
                            {{ \Illuminate\Support\Str::limit($post->content, 100) }}
                        </p>
                    </div>

                    {{-- the edit and delete --}}
                    <div class="flex justify-between p-4">
                        <a href="/edit-post/{{$post->id}}" class="bg-black text-white font-bold py-1 px-3 rounded-sm shadow-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Edit
                        </a>
                        <form action="/delete-post/{{$post->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-black text-white font-bold py-1 px-3 rounded-sm shadow-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
                
            </div>
        @endif
    </section>
</x-layout>
