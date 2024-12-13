<x-layout>
    <main
        class="min-h-[calc(100dvh-80px)] py-10 px-10 sm:px-sm md:px-md lg:px-lg xl:px-xl flex flex-col md:flex-row justify-center md:justify-between items-center gap-10 md:gap-16 lg:gap-20 xl:gap-x-28"
    >
        <div class="md:max-w-sm lg:max-w-md">
            <h1
                class="text-primary text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4"
            >
                Let’s Talk
            </h1>
            <p class="text-sm md:text-xl">
                Have some big idea or brand to develop and need help? Then reach
                out we'd love to hear about your project and provide help
            </p>
            <div class="my-5">
                <h2 class="text-3xl font-bold text-primary">Email</h2>
                <p class="mt-3">arabhorizons@gmail.com</p>
            </div>
            <div class="my-5">
                <h2 class="text-3xl font-bold text-primary">Socials</h2>
                <ul class="flex flex-col gap-5">
                    <li class="mt-5">
                        <a href="instagram.com" target="_blank">Instagram</a>
                    </li>
                    <li><a href="x.com" target="_blank">Twitter</a></li>
                    <li><a href="facebook.com" target="_blank">Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="w-full md:w-auto md:flex-grow">
            <form action="#">
                @csrf
                <div class="flex flex-col gap-y-[1.75rem]">
                    <div>
                        <label for="username" class="text-primary">Name</label>
                        <input type="text" name="username" id="username"
                        value="{{ old("username") }}" class="form-input"
                        required/>
                    </div>
                    <div>
                        <label for="email" class="text-primary">Email</label>
                        <input type="email" name="email" id="email" value="{{
                            old("email")
                        }}" class="form-input" required/>
                    </div>
                    <div class="select-wrapper relative">
                        <label for="service" class="text-primary"
                            >Select project type</label
                        >
                        <select
                            class="form-input custom-select"
                            name="service"
                            id="service"
                            required
                        >
                            <option value="" selected disabled>
                                Select a service
                            </option>
                            <option>Website</option>
                            <option>Android App</option>
                            <option>iOS App</option>
                        </select>
                    </div>
                    <div class="select-wrapper relative">
                        <label for="budget" class="text-primary">Budget</label>
                        <select
                            class="form-input custom-select"
                            name="budget"
                            id="budget"
                            required
                        >
                            <option value="" selected disabled>
                                Select project budget
                            </option>
                            <option>1000$</option>
                            <option>5000$</option>
                            <option>Someting else</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="text-primary"
                            >Message</label
                        >
                        <input
                            type="text"
                            name="message"
                            id="message"
                            class="form-input h-[165px]"
                        />
                    </div>

                    <div>
                        <button
                            type="submit"
                            class="bg-primary w-full text-white py-2 px-4 rounded-md"
                        >
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-layout>
