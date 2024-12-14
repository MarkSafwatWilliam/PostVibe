<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arab Horizon</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Tajawal', sans-serif;
                background-color: #FFFFF0;
                /* Ivory */
                color: #36454F;
                /* Charcoal Gray */
            }

            .header-title {
                animation: fadeIn 2s;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            .header {
                background-color: #006400;
                /* Deep Green */
                color: #FFFFF0;
                /* Ivory */
            }

            .hero-section {
                background-color: #C2B280;
                /* Sand Beige */
            }

            .post-card {
                background-color: #FFFFF0;
                /* Ivory */
                color: #36454F;
                /* Charcoal Gray */
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .post-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            }

            .view-all-btn {
                background-color: #FFD700;
                /* Golden Yellow */
                color: #36454F;
                /* Charcoal Gray */
            }

            .view-all-btn:hover {
                background-color: #40E0D0;
                /* Turquoise */
                color: #FFFFF0;
                /* Ivory */
            }

            footer {
                background-color: #003366;
                /* Navy Blue */
                color: #FFFFF0;
                /* Ivory */
            }

            footer a:hover {
                color: #FFD700;
                /* Golden Yellow */
            }
        </style>
    </head>

    <body class="overflow-x-hidden">
        <!-- Hero Section -->
        <section class="hero-section relative">
            <img src=" {{ asset('hero.jpg') }}" alt="Hero Background" class="w-full h-80 object-cover">
            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                <div class="text-center">
                    <span class="text-yellow-300 text-sm uppercase">Arab News</span>
                    <h2 class="text-4xl text-white font-bold my-2 header-title">The Impact of Arab Events on the Horizon
                    </h2>
                    <p class="text-gray-200">Jason Francisco | October 06, 1973</p>
                </div>
            </div>
        </section>

        <!-- Latest Posts Section -->
        <section class="container mx-auto py-8 px-4">
            <h3 class="text-2xl font-bold mb-6">Latest Posts</h3>
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
            <div class="text-center mt-8">
                <a href="#" class="font-semibold bg-primary text-white px-4 py-2 rounded">View All Posts</a>
            </div>
        </section>

        <!-- JS Animation -->
        <script>
            document.querySelectorAll('.bg-white').forEach((card, index) => {
                setTimeout(() => {
                    card.style.transform = 'scale(1)';
                    card.style.opacity = '1';
                }, index * 200);

                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '0';
                card.style.transform = 'scale(0.9)';
            });
        </script>
    </body>

    </html>

</x-layout>
