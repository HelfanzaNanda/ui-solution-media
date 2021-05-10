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

    <main class="flex-1 overflow-y-auto overflow-x-hidden">
        <section class="p-20 flex flex-col"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height:140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <h1 class="stroke--text-white leading-none mt-20 ml-44">Amazing</h1>
            <h1 class="text-white font--gilroy-bold leading-none text-right -mr-32" style="font-size: 150px;">
                <span class="font-bold">Creativity</span> <span class="font--gilroy-reg">+ Vision</span>
            </h1>
            <div class="flex mt-20 p-10">
                <div class="w-1/2"></div>
                <div class="w-1/2">
                    <h4 class="text-white ml-20 leading-8" style="font-size: 20px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h4>
                </div>
            </div>
            <div class="flex space-x-1 mt-40">
                <div class="w-1/3 flex mt-16 -ml-10">
                    <div class="w-1/3 flex-col space-y-2 -mt-2">
                        <div class="flex justify-around text-white">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                        </div>
                        <img src="{{ asset('assets/images/watch-video.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/3 flex justify-center">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 mb-20">
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fa fa-home text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
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
        <section class="p-20 flex flex-col"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height:140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex justify-center py-10">
                <img src="{{ asset('assets/images/about-us.png') }}" alt="">
            </div>
            <div class="flex flex-col p-20 space-y-5">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px;">
                    A little <span class="stroke--text-white" style="font-size: 90px;">about</span> us
                </h1>
                <h4 class="text-white leading-10 px-20 text-center" style="font-size: 19px;">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to
                </h4>
            </div>
            <div class="flex justify-center space-x-1">
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
        <section class="p-20 flex flex-col space-y-40" style="background: #131313">
            <div class="flex">
                <div class="w-1/2">
                    <img src="{{ asset('assets/images/service1.png') }}" alt="" class="-mt-20">
                </div>
                <div class="w-1/2"></div>
            </div>
            <div class="flex space-x-10">
                <div class="w-2/3">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 130px;">
                        Services we <span class="stroke--text-white" style="font-size: 130px;">Provide</span>
                    </h1>
                    <h4 class="text-white leading-10" style="font-size: 20px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h4>
                </div>
                <div class="w-1/3 self-end">
                    <img src="{{ asset('assets/images/service.png') }}" alt="" class="-mb-40">
                </div>
            </div>
            <div class="flex justify-between space-x-1 mt-60">
                <div class="">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2">
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fas fa-cube text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                </div>
            </div>
        </section>
        <section class="p-20 flex flex-col" style="background: #9c6b6b">
            <div class="flex mr-20 justify-end">
                <a href=""
                    class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                    Get in Touch
                </a>
            </div>
            <div class="flex mt-20 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/iphone-group.png') }}" alt="" class="-ml-20">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        App Development
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 20px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h4>
                    <div>
                        <a href=""
                            class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                            See More
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex space-x-1">
                <div class="w-1/3"></div>
                <div class="w-1/3 flex justify-center">
                    <a href="" class="-mb-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2">
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white w-1/5">
                        <i class="fas fa-cube text-white text-2xl mx-auto self-end"></i>
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                    <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                    </div>
                </div>
            </div>
        </section>
        <section class="p-20 flex flex-col" style="background: #CC7F5E">

        </section>
        <section class="p-20 flex flex-col" style="background: #DFAF53">

        </section>
        <section class="p-20 flex flex-col" style="background: #BFBB92">

        </section>
        <section class="p-20 flex flex-col" style="background: #A6C092">

        </section>
        <section class="p-20 flex flex-col" style="background: #91C2B7">

        </section>
        <section class="p-20 flex flex-col" style="background: #97ACC6">

        </section>
        <section class="p-20 flex flex-col" style="background: #9993C2">

        </section>
        <section class="p-20 flex flex-col" style="background: #BF96C6">

        </section>
        <section class="p-20 flex flex-col" style="background: #C99CB4">

        </section>
        <section class="p-20 flex flex-col" style="background: #C59595">

        </section>
        <section class="p-20 flex flex-col"
            style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">

        </section>
        <section class="p-20 flex flex-col"
            style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">

        </section>
        <x-footer />
    </main>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush