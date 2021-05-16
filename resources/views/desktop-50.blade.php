@extends('layouts.app')
@push('styles')
<style>

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

    <main class="flex-1 overflow-y-auto bg-gray-50 overflow-x-auto overflow-x-hidden">
        <section class="bg--dark p-20">
            <div class="flex flex-col ml-40">
                <div class="flex items-center space-x-2">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">01</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold -mr-36 leading-none" style="font-size: 220px">Case Study
                </h1>
                <div class="flex">
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your pro
                            .
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <h1 class="text-white font--gilroy-bold opacity-30 leading-none -mr-28" style="font-size: 400px;">01
                </h1>
            </div>
            <div class="flex justify-center">
                <a href="" class="-mt-20">
                    <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                </a>
            </div>
        </section>
        <section class="p-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height:140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex flex-col space-y-10">
                <img src="{{ asset('assets/images/search.png') }}" alt="" class="mx-auto">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">Case Study
                </h1>
                <h4 class="text-white text-center leading-8" style="font-size: 19px">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to for world-class brands to make your products to live for world-class
                    brands to make your products to live for world-class brands to make your products to for world-class
                    brands to make your products to live for world-class brands to
                </h4>
            </div>
            <div class="flex justify-center space-x-1 mt-40">
                <div class="w-1/3">

                </div>
                <div class="w-1/3 flex justify-center">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2">
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fa fa-city text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark p-20">
            <div class="flex flex-col ml-40">
                <div class="flex items-center space-x-2">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">02</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold -mr-36 leading-none" style="font-size: 220px">Planning</h1>
                <div class="flex">
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your pro
                            .
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <h1 class="text-white font--gilroy-bold opacity-30 leading-none -mr-28" style="font-size: 400px;">02
                </h1>
            </div>
            <div class="flex justify-center">
                <a href="" class="-mt-20">
                    <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                </a>
            </div>
        </section>
        <section class="p-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height:140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex flex-col space-y-10">
                <img src="{{ asset('assets/images/calendar.png') }}" alt="" class="mx-auto">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                    Planning
                </h1>
                <h4 class="text-white text-center leading-8" style="font-size: 19px">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to for world-class brands to make your products to live for world-class
                    brands to make your products to live for world-class brands to make your products to for world-class
                    brands to make your products to live for world-class brands to
                </h4>
            </div>
            <div class="flex justify-center space-x-1 mt-40">
                <div class="w-1/3">

                </div>
                <div class="w-1/3 flex justify-center">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2">
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fa fa-city text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark p-20">
            <div class="flex flex-col ml-40">
                <div class="flex items-center space-x-2">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">03</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold -mr-36 leading-none" style="font-size: 220px">Research</h1>
                <div class="flex">
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your pro
                            .
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <h1 class="text-white font--gilroy-bold opacity-30 leading-none -mr-28" style="font-size: 400px;">03
                </h1>
            </div>
            <div class="flex justify-center">
                <a href="" class="-mt-20">
                    <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                </a>
            </div>
        </section>
        <section class="p-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height:140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex flex-col space-y-10">
                <img src="{{ asset('assets/images/empty-files.png') }}" alt="" class="mx-auto">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                    Research
                </h1>
                <h4 class="text-white text-center leading-8" style="font-size: 19px">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to for world-class brands to make your products to live for world-class
                    brands to make your products to live for world-class brands to make your products to for world-class
                    brands to make your products to live for world-class brands to
                </h4>
            </div>
            <div class="flex justify-center space-x-1 mt-40">
                <div class="w-1/3">

                </div>
                <div class="w-1/3 flex justify-center">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2">
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fa fa-city text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark p-20">
            <div class="flex flex-col ml-40">
                <div class="flex items-center space-x-2">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">04</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold -mr-36 leading-none" style="font-size: 220px">Development</h1>
                <div class="flex">
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your pro
                            .
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <h1 class="text-white font--gilroy-bold opacity-30 leading-none -mr-28" style="font-size: 400px;">04
                </h1>
            </div>
            <div class="flex justify-center">
                <a href="" class="-mt-20">
                    <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                </a>
            </div>
        </section>
        <section class="p-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height:140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex flex-col space-y-10">
                <img src="{{ asset('assets/images/computer.png') }}" alt="" class="mx-auto">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                    Development
                </h1>
                <h4 class="text-white text-center leading-8" style="font-size: 19px">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to for world-class brands to make your products to live for world-class
                    brands to make your products to live for world-class brands to make your products to for world-class
                    brands to make your products to live for world-class brands to
                </h4>
            </div>
            <div class="flex justify-center space-x-1 mt-40">
                <div class="w-1/3">

                </div>
                <div class="w-1/3 flex justify-center">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2">
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fa fa-city text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark p-20">
            <div class="flex flex-col ml-40">
                <div class="flex items-center space-x-2">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">05</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold -mr-36 leading-none" style="font-size: 220px">Deployment</h1>
                <div class="flex">
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your pro
                            .
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <h1 class="text-white font--gilroy-bold opacity-30 leading-none -mr-28" style="font-size: 400px;">05
                </h1>
            </div>
            <div class="flex justify-center">
                <a href="" class="-mt-20">
                    <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                </a>
            </div>
        </section>
        <section class="p-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height:140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex flex-col space-y-10">
                <img src="{{ asset('assets/images/succes.png') }}" alt="" class="mx-auto">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                    Deployment
                </h1>
                <h4 class="text-white text-center leading-8" style="font-size: 19px">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to for world-class brands to make your products to live for world-class
                    brands to make your products to live for world-class brands to make your products to for world-class
                    brands to make your products to live for world-class brands to
                </h4>
            </div>
            <div class="flex justify-center space-x-1 mt-40">
                <div class="w-1/3">

                </div>
                <div class="w-1/3 flex justify-center">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2">
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fa fa-city text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                </div>
            </div>
        </section>
        <x-footer />
    </main>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush