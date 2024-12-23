<x-layout>
    <main class="bg-gray-100 text-gray-900 min-h-[calc(100vh-80px)]">
        <div class="container mx-auto p-6 max-w-3xl xl:max-w-6xl">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-5xl font-bold mb-6 leading-tight text-center">
                    {{ $post->title }}
                </h1>
                <p class="text-sm text-gray-600 mb-6">
                    By: {{ $post->user->username }} |
                    {{ $post->created_at->format('M d, Y') }}
                </p>
                {{-- the edit and delete --}}
                @can('update', $post)
                    <div class="flex justify-end gap-4 p-4">
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
                @endcan
                @if($post->image)
                <img
                    class="mx-auto h-48 md:h-64 lg:h-72 xl:h-80 rounded-lg mb-6 object-cover"
                    src="{{ asset('storage/' . $post->image) }}"
                    alt="{{ $post->title }}"
                />
                @endif
                <div class="overflow-auto">
                    {!! nl2br(e($post->content)) !!}
                </div>
            </div>
        </div>
    </main>
</x-layout>
