<x-guest-layout>
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <div class="max-w-sm mx-auto px-6">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="md:mt-6">
                        <div class="text-center font-semibold text-black">
                            Daftar ke <span class="text-primary">Guneman.id</span>
                        </div>
                        <div class="text-center font-base text-black">
                            Bergabunglah bersama kami
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mx-auto max-w-lg ">
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Name</span>
                                    <input placeholder="" type="text"
                                        class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                        id="name" type="text" name="name" :value="old('name')" required
                                        autofocus autocomplete="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Email</span>
                                    <input placeholder="" type="email"
                                        class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                        id="email" type="email" name="email" :value="old('email')" required
                                        autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Password</span>
                                    <input placeholder="" type="password" x-model="password"
                                        class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                        id="password" type="password" name="password" required
                                        autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Password Confirm</span>
                                    <input placeholder="" type="password" x-model="password_confirm"
                                        class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                        id="password_confirmation" type="password" name="password_confirmation" required
                                        autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                </div>
                                {{-- <div class="flex justify-start">
                                    <label class="block text-gray-500 font-bold my-4 flex items-center">
                                        <input class="leading-loose text-pink-600 top-0" type="checkbox" />
                                        <span class="ml-2 text-sm py-2 text-gray-600 text-left">Accept the
                                            <a href="#"
                                                class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                                Terms and Conditions of the site
                                            </a>and
                                            <a href="#"
                                                class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                                the information data policy.</a>
                                        </span>
                                    </label>
                                </div> --}}
                                <button
                                    class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                    Register
                                </button>
                                <button
                                    class="mt-3 text-base font-semibold bg-white w-full rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-blue-400">
                                    <a href="/auth/google">
                                        Daftar dengan akun Google
                                    </a>
                                </button>
                            </div>
                        </form>

                        <div class="text-sm font-semibold py-6 flex justify-center">
                            <a href="/login"
                                class="text-black font-normal border-b-2 border-gray-200 hover:border-teal-500">Sudah punya akun?
                                <span class="text-black font-semibold">
                                    Masuk
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
