@extends('layouts.app')
@push('styles')
<style>
    .gradient--text {
        background-image: linear-gradient(to right, rgb(128, 0, 107), rgb(208, 15, 176), white, white, white, white, yellow);
        /* Standard syntax; must be last */
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
    }
</style>
@endpush
@section('content')

<div class="flex flex-col h-screen">
    <div class="fixed px-10 top-0 left-0 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </a> </div>
    </div>
    <div class="fixed px-20 top-0 right-0 py-10 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12"> </a> </div>
    </div>

    <main class="flex-1 overflow-y-auto bg-gray-50 overflow-x-hidden">
        <section class="bg--dark p-20">
            <h1 class="text-white gradient--text font--gilroy-bold" style="font-size: 100px;">
                Case Study
            </h1>
            <h5 class="text-white text-opacity-40 text-xs my-5" style="font-size: 18px;">
                for world-class brands to make your products to live for world-class brands to make your products to
                live for world-class brands to make your products to
            </h5>
        </section>
        <x-footer />
    </main>
</div>
@endsection

@push('scripts')
@endpush