<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Guneman</title>
    <link rel="shortcut icon" href="/img/logo-guneman.jpg" type="image/x-icon" class="rounded-full">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    <!-- ========== MAIN CONTENT ========== -->
    <!-- Sidebar Toggle -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden">
        <div class="flex items-center py-4">
            <!-- Navigation Toggle -->
            <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar"
                aria-controls="application-sidebar" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ms-3 flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                <li class="flex items-center text-sm text-gray-800">
                    Application Layout
                    <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400" width="16"
                        height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    Dashboard
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Sidebar Toggle -->

    <!-- Sidebar -->
    <div id="application-sidebar"
        class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
        <div class="px-6">
            <a class="flex-none text-xl font-semibold" href="#" aria-label="Brand">Guneman</a>
        </div>

        <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1.5">
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 {{ $title === 'Dashboard' ? 'bg-gray-200' : '' }} text-sm text-slate-700 rounded-lg hover:bg-gray-100"
                        href="/admin/dashboard">
                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --><svg
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 12C12 11.4477 12.4477 11 13 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 19 20H13C12.4477 20 12 19.5523 12 19V12Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" />
                            <path
                                d="M4 5C4 4.44772 4.44772 4 5 4H8C8.55228 4 9 4.44772 9 5V19C9 19.5523 8.55228 20 8 20H5C4.44772 20 4 19.5523 4 19V5Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" />
                            <path
                                d="M12 5C12 4.44772 12.4477 4 13 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 19.5523 8 19 8H13C12.4477 8 12 7.55228 12 7V5Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Dashboard
                    </a>
                </li>

                <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 {{ $title === 'Users' ? 'bg-gray-200' : '' }} text-sm text-slate-700 rounded-lg hover:bg-gray-100"
                        href="/admin/users">
                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --><svg
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#000000"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        User
                    </a></li>
                {{-- 
              <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100" href="#">
                <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Video Pembelajaran
              </a></li> --}}

                <li class="hs-accordion" id="projects-accordion">
                    <button type="button"
                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-lg hover:bg-gray-100">
                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 18H14M7.20003 3H16.8C17.9201 3 18.4802 3 18.908 3.21799C19.2843 3.40973 19.5903 3.71569 19.782 4.09202C20 4.51984 20 5.0799 20 6.2V11.8C20 12.9201 20 13.4802 19.782 13.908C19.5903 14.2843 19.2843 14.5903 18.908 14.782C18.4802 15 17.9201 15 16.8 15H7.20003C6.07992 15 5.51987 15 5.09205 14.782C4.71572 14.5903 4.40976 14.2843 4.21801 13.908C4.00003 13.4802 4.00003 12.9201 4.00003 11.8V6.2C4.00003 5.0799 4.00003 4.51984 4.21801 4.09202C4.40976 3.71569 4.71572 3.40973 5.09205 3.21799C5.51987 3 6.07992 3 7.20003 3ZM4.58888 21H19.4112C20.2684 21 20.697 21 20.9551 20.8195C21.1805 20.6618 21.3311 20.4183 21.3713 20.1462C21.4173 19.8345 21.2256 19.4512 20.8423 18.6845L20.3267 17.6534C19.8451 16.6902 19.6043 16.2086 19.2451 15.8567C18.9274 15.5456 18.5445 15.309 18.1241 15.164C17.6488 15 17.1103 15 16.0335 15H7.96659C6.88972 15 6.35128 15 5.87592 15.164C5.45554 15.309 5.07266 15.5456 4.75497 15.8567C4.39573 16.2086 4.15493 16.6902 3.67334 17.6534L3.1578 18.6845C2.77444 19.4512 2.58276 19.8345 2.6288 20.1462C2.669 20.4183 2.81952 20.6618 3.04492 20.8195C3.30306 21 3.73166 21 4.58888 21Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Blog

                        <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>

                        <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div id="projects-accordion-sub"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100"
                                    href="/admin/categories">
                                    Kategori
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100"
                                    href="#">
                                    Hapus Blog
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100"
                                    href="#">
                                    Verify Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-lg hover:bg-gray-100"
                        href="/dashboard">
                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --><svg
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4" stroke="black"
                                stroke-width="1.5" stroke-linecap="round" />
                            <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="black" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Kembali
                    </a></li>
            </ul>
        </nav>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
        <!-- Page Heading -->
        <!-- End Page Heading -->
        <main>
            @yield('content')
        </main>
    </div>
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
</body>

</html>
