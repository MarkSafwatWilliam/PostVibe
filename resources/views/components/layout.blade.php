<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-white">
        <header
            class="flex items-center justify-between py-8 px-sm md:px-md lg:px-lg xl:px-xl"
        >
            <x-logo size="3xl" />
            <nav class="text-nav text-[1rem]">
                <ul class="flex justify-between gap-4 md:gap-8">
                    <li><a href="/">Home</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/signup">Sign up</a></li>
                    <li><a href="/login">Log in</a></li>
                </ul>
            </nav>
        </header>

        {{ $slot }}

        <footer
            class="text-center bg-[#F6F6F7] py-8 px-sm md:px-md lg:px-lg xl:px-xl flex items-center justify-between"
        >
            <x-logo size="2xl">
                <p class="text-[#3B3C4A] mt-4 text-sm [lineHeight:0px]">
                    &copy; 2024 PostVibe. All rights reserved.
                </p>
            </x-logo>
            <div class="py-4 flex-grow">
                <ul class="flex justify-end gap-4 md:gap-8 text-nav">
                    <li>Terms of Use</li>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                </ul>
            </div>
        </footer>
    </body>
</html>
