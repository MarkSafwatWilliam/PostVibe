<x-layout>
    <section class="container mx-auto py-8 px-4">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            {{-- Display published posts --}}
            {{-- Symbolic Link: Laravel stores the public files in the storage directory but this is not directly accessible by the browser.
            You need to create a symbolic link so that files in storage can be accessed publicly.
            Run this command " php artisan storage:link " --}}

            @foreach ($posts as $post)
            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <!-- Display the uploaded image -->
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-full h-40 object-cover">

                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">{{ $post->title }}</h4>
                    <p class="text-sm text-gray-600">
                        {{ $post->user->username }} | {{ $post->created_at->format('F d, Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            
        </div>
    </section>
</x-layout>
