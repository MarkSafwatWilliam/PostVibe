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
            
            <!-- Blog Card -->


            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">Impact of Technology on Arab Culture</h4>
                    <p class="text-sm text-gray-600">Tracy Wilson | October 06, 1973</p>
                </div>
            </div>

            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">Palestine's Economic Shifts</h4>
                    <p class="text-sm text-gray-600">Jason Francisco | October 06, 1973</p>
                </div>
            </div>

            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">The Syrian Diaspora</h4>
                    <p class="text-sm text-gray-600">Elizabeth Stern | October 06, 1973</p>
                </div>
            </div>

            <!-- Additional Posts -->
            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">Arab Art in Modern Times</h4>
                    <p class="text-sm text-gray-600">Ali Hassan | October 06, 1973</p>
                </div>
            </div>

            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">The Role of Women in Arab History</h4>
                    <p class="text-sm text-gray-600">Nora Ali | October 06, 1973</p>
                </div>
            </div>

            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">Exploring Ancient Arab Poetry</h4>
                    <p class="text-sm text-gray-600">Ahmed Omar | October 06, 1973</p>
                </div>
            </div>

            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">The Evolution of Arabic Calligraphy</h4>
                    <p class="text-sm text-gray-600">Sara Khalid | October 06, 1973</p>
                </div>
            </div>

            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">The Revival of Arab Music</h4>
                    <p class="text-sm text-gray-600">Layla Nasser | October 06, 1973</p>
                </div>
            </div>

            <div class="post-card shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold mb-2">Arab Scientists and Their Contributions</h4>
                    <p class="text-sm text-gray-600">Omar Fathi | October 06, 1973</p>
                </div>
            </div>
        </div>
    </section>
    </ x-layout>
