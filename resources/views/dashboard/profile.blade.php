@extends('layouts.dashboard')
@section('content')
    {{-- @dd($user) --}}
    <div class="flex flex-col justify-center lg:justify-start lg:w-[900px] lg:h-[90svh] mx-auto px-4">
        <div class="flex flex-col w-full lg:items-center gap-6">
            @if ($user->image == NULL)
                <img class="w-[200px] rounded-full border-2 border-primary self-center" src="{{ asset('/storage/images/profile.png') }}" alt="profile_image" style="padding: 10px; margin: 0px; ">
            @else
                <img class="w-[200px] rounded-full border-2 border-primary self-center" src="{{ asset('/storage/images/' . $user->image) }}" alt="profile_image" style="padding: 10px; margin: 0px; ">
            @endif
            <h2 class="text-[50px] text-center lg:text-left">{{ $user->name }}</h2>
        </div>
        <div
            class="flex lg:w-[500px] lg:mx-auto sm:mx-5 flex-col bg-white border border-gray-200 shadow-sm rounded-xl p-4 md:p-5">
            Some quick example text to build on the card title and make up the bulk of the card's content.
        </div>
    </div>
    </div>
@endsection
