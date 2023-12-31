    <!-- Navbar Start -->
    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0 fixed top-0">
        <nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
            <div class="flex items-center justify-between">
                <img src="img/logo-guneman.jpg" alt="" class="w-[40px] h-[40px] rounded-full mr-2 border-2 ">
                <a class="flex-none text-lg font-semibold" href="#" aria-label="Brand">Guneman.id</a>
                <div class="sm:hidden">
                    <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
                    <a class="font-medium {{ ($title === "Beranda") ? 'text-blue-600 sm:py-6' : 'text-gray-500 hover:text-gray-400 sm:py-6' }}" href="/" aria-current="page">Beranda</a>
                    <a class="font-medium {{ ($title === "Course") ? 'text-blue-600 sm:py-6' : 'text-gray-500 hover:text-gray-400 sm:py-6' }}" href="/course">Course</a>
                    <a class="font-medium {{ ($title === "Galery") ? 'text-blue-600 sm:py-6' : 'text-gray-500 hover:text-gray-400 sm:py-6' }}" href="/galery">Galery</a>
                    <a class="font-medium {{ ($title === "About") ? 'text-blue-600 sm:py-6' : 'text-gray-500 hover:text-gray-400 sm:py-6' }}" href="/about">About Us</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->