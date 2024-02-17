@extends('layouts.dashboard')
@section('content')
    <div class="mt-20">
        <div class="h-auto w-full bg-primary p-5">
            <div class="container mx-auto max-w-[1000px]">
                <h1 class="text-white font-bold text-3xl">Halo, {{ Auth::user()->name }} !</h1>
            </div>
        </div>
    </div>
@endsection
