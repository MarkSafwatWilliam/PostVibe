<x-layout>
    <section class="container mx-auto py-8 px-4 min-h-[calc(100vh-80px)]">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            {{-- Display published posts --}}
            {{-- Symbolic Link: Laravel stores the public files in the storage directory but this is not directly accessible by the browser.
            You need to create a symbolic link so that files in storage can be accessed publicly.
            Run this command " php artisan storage:link " --}}

            @foreach ($posts as $post)
            <div class="post-card shadow-md rounded-lg overflow-hidden"style="position: relative">
                <!-- Display the uploaded image -->
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-full h-40 object-cover">

                <div class="p-4"  >
                    <h4 class="text-xl font-semibold mb-2">{{ $post->title }}</h4>
                    <p class="text-sm text-gray-600">
                        {{ $post->user->username }} | {{ $post->created_at->format('F d, Y') }}
                    </p>

                    {{-- the content part --}}
                    <p class="text-sm text-gray-600">
                        {{ $post->content}}
                    </p>

                    {{-- the edit and delete --}}
                    <div style="position: absolute;right:5%;top:60%">
                        <a style="font-weight: bold" href="/edit-post/{{$post->id}}">Edit</a>
                    </div>
                    <div>
                        <form action="/delete-post/{{$post->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-black text-white font-bold py-1 px-3 rounded-sm shadow-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50"
                             style="background-color: black;position:absolute;right:3%;bottom:5%;border-radius:5px">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </section>
</x-layout>
