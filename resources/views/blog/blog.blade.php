@extends('layouts.dashboard')
@section('content')
    <!-- Blog Article -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
            <!-- Avatar Media -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full"
                            src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                            alt="Image Description">
                    </div>

                    <div class="grow">
                        <div class="flex justify-between items-center gap-x-2">
                            <div>
                                <!-- Tooltip -->
                                <div class="hs-tooltip inline-block [--trigger:hover] [--placement:bottom]">
                                    <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                        <span class="font-semibold">
                                            Leyla Ludic
                                        </span>

                                        <!-- Dropdown Card -->
                                        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-white divide-y divide-gray-700 shadow-lg rounded-xl"
                                            role="tooltip">
                                            <!-- Body -->
                                            <div class="p-4 sm:p-5">
                                                <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-8 w-8 rounded-full"
                                                            src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                            alt="Image Description">
                                                    </div>

                                                    <div class="grow">
                                                        <p class="text-lg font-semibold">
                                                            Leyla Ludic
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="text-sm">
                                                    Leyla is a Customer Success Specialist at Preline and spends her time
                                                    speaking to in-house recruiters all over the world.
                                                </p>
                                            </div>
                                            <!-- End Body -->

                                            <!-- Footer -->
                                                <div class="px-4 py-3">
                                                    <button type="button"
                                                        class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none  :focus:outline-none  :focus:ring-1  :focus:ring-gray-600">
                                                        Lihat profil
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- End Footer -->
                                        </div>
                                        <!-- End Dropdown Card -->
                                    </div>
                                </div>
                                <!-- End Tooltip -->

                                <ul class="text-xs text-gray-500">
                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full  :text-gray-400  :before:bg-gray-600">
                                        Jan 18
                                    </li>

                                </ul>
                            </div>

                            <!-- Button Group -->
                            {{-- <div>
                                <button type="button"
                                    class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none  :bg-slate-900  :border-gray-700  :text-white  :hover:bg-gray-800  :focus:outline-none  :focus:ring-1  :focus:ring-gray-600">
                                    
                                </button>
                            </div> --}}
                            <!-- End Button Group -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Avatar Media -->

            <!-- Content -->
            <div class="space-y-5 md:space-y-8">
                <div class="space-y-3">
                    <h2 class="text-2xl font-bold md:text-3xl  :text-white">Announcing a free plan for small teams</h2>

                    <p class="text-lg text-gray-800  :text-gray-200">At preline, our mission has always been focused on
                        bringing openness and transparency to the design process. We've always believed that by providing a
                        space where designers can share ongoing work not only empowers them to make better products, it also
                        helps them grow.</p>
                </div>

                <p class="text-lg text-gray-800  :text-gray-200">We're proud to be a part of creating a more open culture
                    and to continue building a product that supports this vision.</p>

                <figure>
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                        alt="Image Description">
                    <figcaption class="mt-3 text-sm text-center text-gray-500">
                        A woman sitting at a table.
                    </figcaption>
                </figure>

                <p class="text-lg text-gray-800  :text-gray-200">As we've grown, we've seen how Preline has helped companies
                    such as Spotify, Microsoft, Airbnb, Facebook, and Intercom bring their designers closer together to
                    create amazing things. We've also learned that when the culture of sharing is brought in earlier, the
                    better teams adapt and communicate with one another.</p>

                <p class="text-lg text-gray-800  :text-gray-200">That's why we are excited to share that we now have a <a
                        class="text-blue-600 decoration-2 hover:underline font-medium" href="#">free version of
                        Preline</a>, which will allow individual designers, startups and other small teams a chance to
                    create a culture of openness early on.</p>

                <blockquote class="text-center p-4 sm:px-7">
                    <p
                        class="text-xl font-medium text-gray-800 md:text-2xl md:leading-normal xl:text-2xl xl:leading-normal  :text-gray-200">
                        To say that switching to Preline has been life-changing is an understatement. My business has
                        tripled and I got my life back.
                    </p>
                    <p class="mt-5 text-gray-800  :text-gray-200">
                        Nicole Grazioso
                    </p>
                </blockquote>

                <figure>
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1670272498380-eb330b61f3cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                        alt="Image Description">
                    <figcaption class="mt-3 text-sm text-center text-gray-500">
                        A man and a woman looking at a cell phone.
                    </figcaption>
                </figure>

                <div class="space-y-3">
                    <h3 class="text-2xl font-semibold  :text-white">Bringing the culture of sharing to everyone</h3>

                    <p class="text-lg text-gray-800  :text-gray-200">We know the power of sharing is real, and we want to
                        create an opportunity for everyone to try Preline and explore how transformative open communication
                        can be. Now you can have a team of one or two designers and unlimited spectators (think PMs,
                        management, marketing, etc.) share work and explore the design process earlier.</p>
                </div>

                <ul class="list-disc list-outside space-y-5 ps-5 text-lg text-gray-800  :text-gray-200">
                    <li class="ps-2">Preline allows us to collaborate in real time and is a really great way for
                        leadership on the team to stay up-to-date with what everybody is working on," <a
                            class="text-blue-600 decoration-2 hover:underline font-medium" href="#">said</a> Stewart
                        Scott-Curran, Intercom's Director of Brand Design.</li>
                    <li class="ps-2">Preline opened a new way of sharing. It's a persistent way for everyone to see and
                        absorb each other's work," said David Scott, Creative Director at <a
                            class="text-blue-600 decoration-2 hover:underline font-medium" href="#">Eventbrite</a>.
                    </li>
                </ul>

                <p class="text-lg text-gray-800  :text-gray-200">Small teams and individual designers need a space where
                    they can watch the design process unfold, both for themselves and for the people they work with – no
                    matter if it's a fellow designer, product manager, developer or client. Preline allows you to invite
                    more people into the process, creating a central place for conversation around design. As those teams
                    grow, transparency and collaboration becomes integrated in how they communicate and work together.</p>

                @include('blog.partials.tag-label')
            </div>
            <!-- End Content -->
        </div>
        @include('blog.partials.like-comment-share-button')
    </div>
    <!-- End Blog Article -->
@endsection
