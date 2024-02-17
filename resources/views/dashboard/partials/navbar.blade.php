    <!-- Navbar Start -->
    <header
        class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0 fixed top-0">
        <nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
            aria-label="Global">
            <div class="flex items-center justify-between">
                <img src="/img/logo-guneman.jpg" alt="" class="w-[40px] h-[40px] rounded-full mr-2 border-2 ">
                <a class="flex-none text-xl font-semibold" href="/" aria-label="Brand">Dashboard</a>
                <div class="sm:hidden">
                    <button type="button"
                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navbar-collapse-with-animation"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div
                    class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
                    <a class="font-medium {{ $title === 'Home' ? 'text-blue-600 sm:py-6' : 'text-gray-500 hover:text-gray-400 sm:py-6' }}"
                        href="/dashboard" aria-current="page"></a>
                    <a class="font-medium {{ $title === 'Blog' ? 'text-blue-600 sm:py-6' : 'text-gray-500 hover:text-gray-400 sm:py-6' }}"
                        href="/blog">Blog</a>
                    <div class="hs-dropdown relative inline-flex p-2">
                        <button id="hs-dropdown-custom-trigger" type="button"
                            class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                            <span
                                class="m-2 text-gray-600 font-medium truncate max-w-[7.5rem]">{{ Auth::user()->name }}</span>
                            <svg class="hs-dropdown-open:rotate-180 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2"
                            aria-labelledby="hs-dropdown-custom-trigger">
                            @if (Auth::user()->role === 'admin')
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                    href="/admin/dashboard">
                                    Admin
                                </a>
                            @endif
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                href="/profile/{{ Auth::user()->username }}">
                                Profile
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                href="/dashboard/setting">
                                Pengaturan
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-500 hover:text-white focus:outline-none focus:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->
