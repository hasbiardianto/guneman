@extends('layouts.main')
@section('container')
<!-- Team -->
<div class="mt-20 max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Meet Our Crew</h2>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12">
        <div class="text-center">
            <img class="rounded-xl sm:w-48 sm:h-48 lg:w-60 lg:h-60 mx-auto" src="./img/imam-photo.png" alt="Image Description">
            <div class="mt-2 sm:mt-4">
                <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg">
                    Imam Akbar Arrasyid
                </h3>
                <p class="text-xs text-gray-600 sm:text-sm lg:text-base">
                    CEO (Chief Executif Officer)
                </p>
            </div>
        </div>
        <!-- End Col -->

        <div class="text-center">
            <img class="rounded-xl sm:w-48 sm:h-48 lg:w-60 lg:h-60 mx-auto" src="./img/anisa-photo.png" alt="Image Description">
            <div class="mt-2 sm:mt-4">
                <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg">
                    Anisa
                </h3>
                <p class="text-xs text-gray-600 sm:text-sm lg:text-base">
                    CDO (Chief Data Officer)
                </p>
            </div>
        </div>
        <!-- End Col -->

        <div class="text-center">
            <img class="rounded-xl sm:w-48 sm:h-48 lg:w-60 lg:h-60 mx-auto" src="./img/hasbi-photo.png" alt="Image Description">
            <div class="mt-2 sm:mt-4">
                <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg">
                    Hasbi Ardianto Pratama
                </h3>
                <p class="text-xs text-gray-600 sm:text-sm lg:text-base">
                    CTO (Chief Technology Officer)
                </p>
            </div>
        </div>
        <!-- End Col -->

        <div class="text-center">
            <img class="rounded-xl sm:w-48 sm:h-48 lg:w-60 lg:h-60 mx-auto" src="./img/winda-photo.png" alt="Image Description">
            <div class="mt-2 sm:mt-4">
                <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg">
                    Winda Khoerunisa Allia L
                </h3>
                <p class="text-xs text-gray-600 sm:text-sm lg:text-base">
                    COO (Chief Operation Officer)
                </p>
            </div>
        </div>
        <!-- End Col -->

        <div class="text-center">
            <img class="rounded-xl sm:w-48 sm:h-48 lg:w-60 lg:h-60 mx-auto" src="./img/fadila-photo.png" alt="Image Description">
            <div class="mt-2 sm:mt-4">
                <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg">
                    Fadila Mayorita Bilqis
                </h3>
                <p class="text-xs text-gray-600 sm:text-sm lg:text-base">
                    CMO (Chief Management Officer)
                </p>
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Team -->
@endsection('container')