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
    <div class="fixed flex items-center space-x-5 px-20 top-0 right-0 py-10 z-20">
        <a href="">
            <div
                class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                <p>Get in Touch</p>
            </div>
        </a>
        <div> <a href=""> <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12"> </a> </div>
    </div>

    <main class="flex-1 overflow-y-auto overflow-x-hidden">
        <section class="flex flex-col min-h-max w-screen"
            style="background-image: url({{ asset('assets/images/bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex flex-col ml-52 mt-20">
                <h1 class="stroke--text-white leading-none mt-10 ml-5" style="font-size: 130px">Amazing</h1>
                <h1 class="text-white font--gilroy-bold leading-none text-right -mr-5" style="font-size: 140px;">
                    <span class="font-bold">Creativity</span> <span class="font--gilroy-reg">+ Vision</span>
                </h1>
            </div>
            <div class="flex p-20">
                <div class="w-1/2"></div>
                <div class="w-1/2">
                    <h4 class="text-white ml-20 leading-8" style="font-size: 20px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h4>
                </div>
            </div>
            <div class="flex space-x-1 px-10">
                <div class="w-1/3 flex mt-11">
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
                <div class="w-1/3 flex space-x-2 mb-10 px-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background-image: url({{ asset('assets/images/bg.png') }}); background-position:
            center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/about-us.png') }}" alt="" class="w-96">
            </div>
            <div class="flex flex-col p-20 space-y-5">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 80px;">
                    A little <span class="stroke--text-white" style="font-size: 90px;">about</span> us
                </h1>
                <h4 class="text-white leading-10 text-center" style="font-size: 19px;">
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
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col space-y-20 min-h-screen w-screen" style="background: #131313">
            <div class="flex">
                <div class="w-1/2">
                    <img src="{{ asset('assets/images/service1.png') }}" alt="" class="-mt-20">
                </div>
                <div class="w-1/2"></div>
            </div>
            <div class="flex space-x-10">
                <div class="w-2/3">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 110px;">
                        Services we <span class="stroke--text-white" style="font-size: 110px;">Provide</span>
                    </h1>
                    <h4 class="text-white leading-10" style="font-size: 20px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h4>
                </div>
                <div class="w-1/3 self-end">
                    <img src="{{ asset('assets/images/service.png') }}" alt="" class="-mb-20">
                </div>
            </div>
            <div class="flex justify-between space-x-1 items-end">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #9c6b6b">
            <div class="flex mt-20 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/iphone-group.png') }}" alt="" class="-ml-20">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        App<br>Development
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
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #CC7F5E">
            <div class="flex mt-20 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/ss.png') }}" alt="" class="-ml-20">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        Web<br>Development
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
            <div class="flex space-x-1 mt-40">
                <div class="w-1/3"></div>
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #DFAF53">
            <div class="flex my-10 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/seo.png') }}" alt="" class="-ml-10">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20 mt-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        SEO
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
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #BFBB92">
            <div class="flex my-20 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/ig-post.png') }}" alt="" class="">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        Social Media Marketing
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
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #A6C092">
            <div class="flex my-20 space-x-20">
                <div class="w-1/3 flex items-end">
                    <img src="{{ asset('assets/images/content.png') }}" alt="" class="-mr-10">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        Content Marketing
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
            <div class="flex space-x-1 mt-10">
                <div class="w-1/3"></div>
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #91C2B7">
            <div class="flex my-20 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/graphic-design.png') }}" alt="" class="-ml-10">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        Graphic <br> Design
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
            <div class="flex space-x-1 mt-10">
                <div class="w-1/3"></div>
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #97ACC6">
            <div class="flex my-20 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/logo-designing.png') }}" alt="" class="-ml-10">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        Logo <br> Designing
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
            <div class="flex space-x-1 mt-10">
                <div class="w-1/3"></div>
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #9993C2">
            <div class="flex my-10 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/production.png') }}" alt="" class="-ml-10">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        Production
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
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #BF96C6">
            <div class="flex my-10 space-x-10">
                <div class="w-1/3 flex">
                    <img src="{{ asset('assets/images/travel-pamflet.png') }}" alt="" class="-ml-10">
                </div>
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 100px;">
                        Digital Printing Service
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
            <div class="flex space-x-1 mt-28">
                <div class="w-1/3"></div>
                <div class="w-1/3 flex justify-center -mt-20">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex space-x-2 -mb-10">
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
        <section class="p-20 flex flex-col min-h-screen w-screen" style="background: #C99CB4">
            <div class="flex mt-10 mb-40 space-x-10">
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 130px;">
                        Our <span class="stroke--text-white" style="font-size: 100px;">Works</span>
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 24px;">
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
                <div class="w-1/3 flex">
                </div>
            </div>
            <div class="flex space-x-1 -mb-10">
                <div class="w-1/3"></div>
                <div class="w-1/3"></div>
                <div class="w-1/3 flex flex-col space-y-10">
                    <div class="flex justify-center">
                        <a href="" class="-mt-20">
                            <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                        </a>
                    </div>
                    <div class="flex space-x-2">
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
            </div>
        </section>
        <section class="px-20 flex flex-col min-h-screen w-screen justify-between space-y-10"
            style="background: #C59595">
            <div class="flex space-x-10">
                <div class="w-2/3">
                    <img src="{{ asset('assets/images/goals/goals-1.png') }}" alt="" srcset="">
                </div>
                <div class="w-1/3">
                </div>
            </div>
            <div class="flex space-x-10 items-center">
                <div class="w-2/3">
                    <img src="{{ asset('assets/images/goals/goals-2.png') }}" alt="" srcset="">
                </div>
                <div class="w-1/3">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 130px; margin-left: -450px">
                        Goals <span class="stroke--text-white" style="font-size: 100px;">App</span>
                    </h1>
                    <h6 class="font--gilroy-bold text-white uppercase text-lg" style="margin-left: -450px">App
                        Development</h6>
                </div>
            </div>
            <div class="flex space-x-10">
                <div class="w-2/3">
                    <img src="{{ asset('assets/images/goals/goals-3.png') }}" alt="" srcset="">
                </div>
                <div class="w-1/3 flex flex-col">
                    <div class="flex justify-center -mt-10">
                        <a href="" class="">
                            <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                        </a>
                    </div>
                    <div class="flex space-x-2 mt-5">
                        <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                        </div>
                        <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                        </div>
                        <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                        </div>
                        <div class="flex py-5 border-b-2 border-white w-1/5">
                            <i class="fas fa-cube text-white text-2xl mx-auto self-end"></i>
                        </div>
                        <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                        </div>
                    </div>
                </div>
            </div>
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