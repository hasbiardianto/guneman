<!-- Toast -->
<div id="dismiss-toast"
    class="z-10 fixed bottom-0 start-0 hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-blue-500 border border-gray-200 rounded-xl shadow-lg mx-3 my-4 min-w-[350px]"
    role="alert">
    <div class="flex p-4">
        <p class="text-sm text-white">
            {{$message}}
        </p>

        <div class="ms-auto">
            <button type="button"
                class="inline-flex flex-shrink-0 justify-center items-center h-5 w-5 rounded-lg text-white opacity-50 hover:opacity-100 focus:outline-none focus:opacity-100"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>
