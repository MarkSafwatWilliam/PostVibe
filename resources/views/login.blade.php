<x-layout>
    <main
        class="min-h-[calc(100dvh-80px)] px-10 sm:px-sm md:px-md lg:px-lg xl:px-xl flex flex-col justify-center gap-y-10 items-center"
    >
        <div class="w-full max-w-2xl">
            <h1
                class="text-primary text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4"
            >
                Sign in
            </h1>
            <p class="text-sm md:text-xl">
                Login to your account to create Awesome blogs!
            </p>
        </div>
        <div class="w-full max-w-2xl">
            <form action="/login" method="post">
                @csrf
                <div class="flex flex-col gap-y-[1.75rem]">
                    <div>
                        <label for="email" class="text-primary">Email</label>
                        <input type="email" name="email" id="email" value="{{
                            old("email")
                        }}" class="form-input" /> @error('email')
                        <p class="err-message">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="text-primary"
                            >Password</label
                        >
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-input"
                        />
                        @error('password')
                        <p class="err-message">{{ $message }}</p>
                        @enderror
                    </div>
                    @if (session()->has("ErrMessage"))
                    <div class="err-message">
                        {{ session("ErrMessage") }}
                    </div>
                    @endif
                    <div class="text-center">
                        <p class="text-sm">
                            Don't have an account ?
                            <a href="/signup" class="text-primary"
                                >Sign up now</a
                            >
                        </p>
                    </div>
                    <div>
                        <button
                            type="submit"
                            class="bg-primary w-full text-white py-2 px-4 rounded-md"
                        >
                            Sign in
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-layout>
