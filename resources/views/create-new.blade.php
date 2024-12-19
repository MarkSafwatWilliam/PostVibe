<x-layout>
    <main
        class="min-h-[calc(100dvh-80px)] px-10 sm:px-sm md:px-md lg:px-lg xl:px-xl flex flex-col md:flex-row justify-center md:justify-between items-center gap-10 md:gap-16 lg:gap-20 xl:gap-x-28"
    >
        <div class="md:max-w-sm lg:max-w-md">
            <h1
                class="text-primary text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4"
            >
                Create a new post
            </h1>
            <p class="text-xl">Write your awesome blog post!</p>
        </div>
        <div class="w-full md:w-auto md:flex-grow">
            <form
                action="/create-post"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="flex flex-col gap-y-[1.75rem]">
                    <div>
                        <label for="title" class="text-primary">Title</label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-input"
                        />
                    </div>
                    <div>
                        <label for="content" class="text-primary">Body</label>
                        <textarea
                            name="content"
                            id="content"
                            class="form-input min-h-24"
                            rows="5"
                        ></textarea>
                    </div>

                    <!-- Image Input -->
                    <div>
                        <label for="image" class="text-primary"
                            >cover image</label
                        >
                        <div
                            class="relative group w-full h-48 rounded-md border-dashed border-2 border-gray-300 hover:border-primary transition-colors flex items-center justify-center cursor-pointer overflow-hidden"
                        >
                            <input
                                type="file"
                                name="image"
                                id="image"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                            />
                            <div
                                class="flex flex-col items-center gap-2 text-gray-400 group-hover:text-primary transition-colors"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 16.5V5a2 2 0 012-2h14a2 2 0 012 2v11.5m-4.5-3l-3 3-1.5-1.5m0 0L6 20.5h12m-6-5.5v6"
                                    />
                                </svg>
                                <p class="text-sm">
                                    Click to upload or drag and drop
                                </p>
                            </div>
                            <div
                                class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-10 transition-opacity"
                            ></div>
                        </div>
                        <!-- Preview Container -->
                        <div id="preview-container" class="mt-4">
                            <img
                                id="image-preview"
                                class="max-w-full max-h-40 object-cover rounded-md hidden"
                            />
                        </div>
                    </div>

                    <div>
                        <button
                            type="submit"
                            class="bg-primary w-full text-white py-2 px-4 rounded-md"
                        >
                            Publish
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script>
        const imageInput = document.getElementById("image");
        const imagePreview = document.getElementById("image-preview");

        imageInput.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove("hidden");
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.classList.add("hidden");
                imagePreview.src = "";
            }
        });
    </script>
</x-layout>
