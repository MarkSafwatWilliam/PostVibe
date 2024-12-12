<x-layout>
    <main
        class="min-h-[calc(100dvh-80px)] px-10 sm:px-sm md:px-md lg:px-lg xl:px-xl flex flex-col md:flex-row justify-center md:justify-between items-center gap-10 md:gap-16 lg:gap-20 xl:gap-x-28"
    >
        <div class="md:max-w-sm lg:max-w-md">
            <h1
                class="text-primary text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4"
            >
                Sign up Today
            </h1>
            <p class="text-xl">
                Create an account so that you’d be able to create Awesome blogs!
            </p>
        </div>
        <div class="w-full md:w-auto md:flex-grow">
            <form action="/signup" method="post">
                @csrf
                <div class="flex flex-col gap-y-[1.75rem]">
                    <div>
                        <label for="username" class="text-primary">Name</label>
                        <input type="text" name="username" id="username"
                        value="{{ old("username") }}" class="form-input" />
                        @error('username')
                        <p class="err-message">{{ $message }}</p>
                        @enderror
                    </div>
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
                    <div>
                        <label for="confirmedpassword" class="text-primary"
                            >Confirm password</label
                        >
                        <input
                            type="password"
                            name="password_confirmation"
                            id="confirmedpassword"
                            class="form-input"
                        />
                    </div>

                    <div class="text-center">
                        <p class="text-sm">
                            Already have an account ?
                            <a href="/login" class="text-primary">Login</a>
                        </p>
                    </div>

                    <div>
                        <button
                            type="submit"
                            class="bg-primary w-full text-white py-2 px-4 rounded-md"
                        >
                            Sign up
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-layout>
