<x-layout>
    <!-- Hero Section -->
    <section class="hero-section relative">
    <img
        src="{{ asset('hero.jpg') }}"
        alt="Hero Background"
        class="w-full h-80 object-cover"
    />
    <div
        class="absolute top-0 left-0 w-full h-full flex items-center justify-center"
    >
        <div class="text-center">
            <span class="text-yellow-300 text-sm uppercase">Arab News</span>
            <h2 class="text-4xl text-white font-bold my-2 header-title">
                The Impact of Arab Events on the Horizon
            </h2>
            <p class="text-gray-200">Jason Francisco | October 06, 1973</p>
        </div>
    </div>
</section>

<div class="mx-auto text-center">
    <a href="/create-new" 
       class="mt-8 bg-white text-green-700 font-semibold px-6 py-3 rounded-md shadow-md border border-green-700 
              hover:bg-green-700 hover:text-white hover:shadow-lg transition duration-300">
        Share your opinion NOW!
    </a>
</div>


    <!-- Latest Posts Section -->
    <section class="container mx-auto py-8 px-4">
        <h3 class="text-2xl font-bold mb-6 text-center">Latest Posts</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($posts as $post)
            <div class="post-card shadow-md rounded-lg overflow-hidden"  data-post-id="{{ $post->id }}">
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

           
    </section>

    <!-- JS Animation -->
    <script>
        document.querySelectorAll(".bg-white").forEach((card, index) => {
            setTimeout(() => {
                card.style.transform = "scale(1)";
                card.style.opacity = "1";
            }, index * 200);

            card.style.transition = "all 0.5s ease";
            card.style.opacity = "0";
            card.style.transform = "scale(0.9)";
        });

        document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.post-card').forEach(function (div) {
        div.addEventListener('click', function () {
            const postId = this.dataset.postId;
            window.location.href = `/post/${postId}`;
        });
    });
});
    </script>
</x-layout>
