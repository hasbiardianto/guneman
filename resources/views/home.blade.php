@extends('layouts.main')
@section('container')
<!-- Hero -->
<div class="mt-20">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Belajar Bahasa Daerah dengan <span class="text-primary">Guneman.id</span></h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Kamu Dapat Mempelajari Berbagai Bahasa Daerah di Indonesia Melalui Course yang Disediakan</p>

                <!-- Buttons -->
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a class="inline-flex justify-center items-center gap-x-3 text-center bg-primary hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
                        Mulai Belajar
                        <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" href="#">
                        Hubungi Kami
                    </a>
                </div>
                <!-- End Buttons -->
            </div>
            <!-- End Col -->

            <div class="relative ml-4">
                <img class="w-full rounded-md" src="img/hero-image.jpg" alt="Image Description">
                <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
</div>
<!-- End Hero -->
<!-- Course Section Start -->
<!-- Card Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <h1 class="font-bold text-xl text-center my-10 md:text-4xl text-gray-800">Pilihan Course</h1>
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-6 content-center">
        <!-- Card -->
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="#">
            <div class="p-4 md:p-5">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="group-hover:text-primary font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            Bahasa Sunda
                        </h3>
                        <p class="text-sm text-gray-500">
                            Detail pembelajaran
                        </p>
                    </div>
                    <div class="pl-3">
                        <svg class="w-3.5 h-3.5 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="#">
            <div class="p-4 md:p-5">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="group-hover:text-primary font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            Bahasa Jawa
                        </h3>
                        <p class="text-sm text-gray-500">
                            Detail pembelajaran
                        </p>
                    </div>
                    <div class="pl-3">
                        <svg class="w-3.5 h-3.5 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="#">
            <div class="p-4 md:p-5">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="group-hover:text-primary font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            Bahasa Madura
                        </h3>
                        <p class="text-sm text-gray-500">
                            Detail pembelajaran
                        </p>
                    </div>
                    <div class="pl-3">
                        <svg class="w-3.5 h-3.5 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Card Section -->
<!-- Course Section End -->
<!-- Environment Section Start -->
<div class="m-10">
    <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white text-center">"<span class="text-primary">Guneman.id</span> adalah platform belajar Bahasa daerah Indonesia yang interaktif dibantu tentor dari penutur asli Bahasa daerah setempat"</h1>
</div>
<!-- Card Section -->
<div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <h1 class="font-bold text-xl text-center my-5"><span class="text-primary">Guneman.id</span> Menyediakan :</h1>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <!-- Card -->
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="#">
            <div class="p-4 md:p-5">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                        <g clip-path="url(#clip0_23_40)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M46.3817 0V17.2233L26.7584 36.8465C25.7702 37.8348 25.2055 39.1759 25.2055 40.5876V52.9404H37.5583C38.97 52.9404 40.3112 52.3757 41.2994 51.3875L46.3817 46.3052V59.9991H0.5V0H46.3817ZM50.4263 18.1656C51.1181 17.4739 52.2333 17.4739 52.9251 18.1656L59.9838 25.2243C60.6721 25.9126 60.6721 27.0278 59.9838 27.7196L38.8077 48.8957C38.4759 49.224 38.0277 49.4111 37.5583 49.4111H28.7349V40.5876C28.7349 40.1182 28.9219 39.67 29.2502 39.3418L50.4263 18.1656ZM21.6762 35.2936H11.0881V38.823H21.6762L21.6762 35.2936ZM28.7349 28.2349H11.0881V31.7642H28.7348V28.2349H28.7349ZM51.6757 21.9067L48.8769 24.7055L53.4404 29.269L56.2392 26.4702L51.6757 21.9067ZM35.7936 10.5881H11.0881V21.1762H35.7936V10.5881L35.7936 10.5881Z" fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_23_40">
                                <rect width="60" height="60" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <div class="grow ml-5">
                        <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            Course
                        </h3>
                        <p class="text-sm text-gray-500">
                            Dibantu dengan mentor penutur asli
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="#">
            <div class="p-4 md:p-5">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <path d="M7.5 15C7.5 10.8579 10.8579 7.5 15 7.5H35C39.1423 7.5 42.5 10.8579 42.5 15V35C42.5 39.1423 39.1423 42.5 35 42.5H15C10.8579 42.5 7.5 39.1423 7.5 35V15Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M52.5 17.5V45C52.5 49.1423 49.1423 52.5 45 52.5H17.5" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22.5 30V20L30.3573 25L22.5 30Z" fill="black" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="grow ml-5">
                        <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            Video Edukasi
                        </h3>
                        <p class="text-sm text-gray-500">
                            Yang tersinkron dengan social media
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="#">
            <div class="p-4 md:p-5">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                        <g clip-path="url(#clip0_23_45)">
                            <path d="M60.4313 25.515C60.2084 24.4563 59.4655 23.581 58.4565 23.1881L54.9178 21.8128V25.451L55.5879 25.7115C55.8902 25.8296 56.1132 26.0924 56.1794 26.4091C56.2456 26.7269 56.1486 27.0581 55.9189 27.2877L33.2117 49.9932C32.7624 50.4414 32.0913 50.5827 31.4984 50.3531L26.4519 48.3905V52.0287L29.994 53.4062C32.0073 54.1888 34.2922 53.7087 35.82 52.1811L59.5614 28.4401C60.3264 27.6751 60.6543 26.5746 60.4313 25.515Z" fill="black" />
                            <path d="M4.12273 35.1192C4.28164 32.905 4.99262 30.0041 7.45859 30.141L29.982 38.9009C32.0009 39.6858 34.2924 39.2 35.8201 37.6636L57.5901 15.7506C58.3518 14.9844 58.6763 13.8851 58.4523 12.8288C58.2282 11.7714 57.4864 10.8982 56.4798 10.5074L34.0937 1.80165C32.0748 1.01672 29.7822 1.50247 28.2556 3.03903L3.03664 28.4224C1.04199 30.0639 0.5 33.1247 0.5 35.8433C0.5 38.5621 0.681055 41.8249 3.76297 43.0933L3.03664 42.9232L9.82672 45.5637V43.133C9.82672 42.7378 9.87594 42.3516 9.95645 41.9752L5.39316 40.2001C3.9418 39.6504 3.94062 37.6757 4.12273 35.1192Z" fill="black" />
                            <path d="M13.5134 41.3271C13.0344 41.8084 12.7657 42.4574 12.7657 43.133V54.3919L17.5496 53.3675L23.513 58.5687V47.313C23.513 46.6342 23.7823 45.9852 24.2614 45.5061L26.1683 43.5988L15.4215 39.4196L13.5134 41.3271Z" fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_23_45">
                                <rect width="60" height="60" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <div class="grow ml-5">
                        <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            Kamus Bahasa Daerah
                        </h3>
                        <p class="text-sm text-gray-500">
                            Kosakata dari setiap bahasa daerah
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Card Section -->
<!-- Environment Section End -->
@endsection