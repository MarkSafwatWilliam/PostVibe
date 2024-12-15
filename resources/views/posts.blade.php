<x-layout>
    <section class="container mx-auto py-8 px-4">

        {{-- Create an new post --}}
        <div class="flex justify-center items-center min-h-screen bg-gray-100 p-4">
            <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg mx-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Create a New Post</h2>
        
                <form action="/create-post" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input class="w-full p-2 border border-gray-300 rounded-md" name="title" type="text" placeholder="Title:" />
                    </div>
        
                    <div>
                        <textarea class="w-full p-2 border border-gray-300 rounded-md" name="content" placeholder="What's on your mind?" rows="4"></textarea>
                    </div>
        
                    <div class="text-right">
                        <button style="background-color:blue" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Post</button>
                    </div>
                </form>
            </div>
        </div>
        
        

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
