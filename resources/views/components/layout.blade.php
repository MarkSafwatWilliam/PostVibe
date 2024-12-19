<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Arab Horizon</title>

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
            class="flex items-center justify-between py-8 px-10 sm:px-sm md:px-md lg:px-lg xl:px-xl h-[80px]"
        >
            <div class="flex gap-5 items-center">
                <a href="/">
                    <x-logo size="xl" />
                </a>
            </div>
            <nav class="text-nav text-[1rem] relative">
                <ul
                    id="menu"
                    class="hidden absolute w-[130px] top-8 right-2 text-center [&>:not(:last-child)]:border-b [&>:not(:last-child)]:border-white [&>li]:py-2 bg-primary text-white z-40 md:flex md:w-auto md:flex-row md:static md:dpy-0 md:bg-transparent md:text-black items-center gap-5"
                >
                    <li><a href="/">Home</a></li>
                    <li><a href="/posts">My Posts</a></li>
                    @auth
                    <li><a href="/create-new">New Blog</a></li>
                    @endauth

                    <li><a href="/contact">Contact</a></li>
                    @auth
                    <li>
                        <form action="/signout" method="post">
                            @csrf
                            <button
                                class="md:text-primary border-2 p-2 rounded-md md:border-primary"
                                type="submit"
                            >
                                Sign out
                            </button>
                        </form>
                    </li>
                    @else
                    <li>
                        <a
                            class="p-2 bg-primary rounded-md text-white"
                            href="/signup"
                            >Sign up</a
                        >
                    </li>
                    <li>
                        <a
                            class="text-primary border-2 p-2 rounded-md border-primary"
                            href="/login"
                            >Log in</a
                        >
                    </li>
                    @endauth
                </ul>

                <button class="md:hidden" id="menu-toggle">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="100"
                        height="100"
                        viewBox="0 0 30 30"
                        class="fill-current w-6 h-6 text-primary"
                    >
                        <path
                            d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"
                        ></path>
                    </svg>
                </button>
            </nav>
        </header>

        {{ $slot }}

        <footer
            class="text-center bg-[#F6F6F7] py-8 px-10 sm:px-sm md:px-md lg:px-lg xl:px-xl flex flex-col gap-y-10 md:flex-row items-center justify-between"
        >
            <x-logo size="2xl">
                <p class="text-[#3B3C4A] mt-4 text-sm md:[lineHeight:0px]">
                    &copy; 2024 ArabHorizons. All rights reserved.
                </p>
            </x-logo>
            <div class="py-4 flex-grow">
                <ul
                    class="flex justify-end gap-y-4 gap-x-4 md:gap-x-8 text-nav flex-wrap [&>li]:m-auto md:[&>li]:m-0"
                >
                    <li>Terms of Use</li>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                </ul>
            </div>
        </footer>
    </body>
</html>
