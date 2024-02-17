@extends('layouts.dashboard')
@section('content')
    <div class="mt-14 container mx-auto">
        <div class="flex flex-col h-auto w-full bg-gray-300 rounded-md">
            <div class="flex flex-row mt-2 px-5 pt-5 gap-2 items-center">
                <div class="bg-primary text-white flex flex-row items-center gap-2 p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg>
                    <h1 class="text-lg font-bold">Progress Belajar</h1>
                </div>
            </div>
            <div class="block px-5 mt-2 mb-5">
                <p>Lanjutkan progress belajar kamu</p>
            </div>
            {{-- Progress Learning --}}
            <div class="flex w-auto h-14 bg-white items-center justify-between px-3 mx-2 mb-3 rounded-md">
                <h2>Belajar Bahasa Jawa</h2>
                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-primary hover:text-black disabled:opacity-50 disabled:pointer-events-none">
                    <a href="#">Lanjutkan</a>
                </button>
            </div>

            {{-- Progress Learning --}}
            <div class="flex w-auto h-14 bg-white items-center justify-between px-3 mx-2 mb-3 rounded-md">
                <h2>Belajar Bahasa Jawa</h2>
                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-primary hover:text-black disabled:opacity-50 disabled:pointer-events-none">
                    <a href="#">Lanjutkan</a>
                </button>
            </div>
        </div>
    </div>
@endsection