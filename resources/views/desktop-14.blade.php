@extends('layouts.app')
@push('styles')
<style>
    .m-container{

    padding-left: 10rem;
    padding-right: 10rem;
    }
    .icon-page{
        font-size: 120%;
    }
    .section{
        overflow: hidden;
    }
</style>
@endpush
@section('content')

<div class="">
    <div class="fixed px-20 top-0 left-0 z-100" style="width: 100%;z-index: 200">
        <div class="flex " style="justify-content: space-between;align-items: center;">
            <div class="">
                <div> <a href=""> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </a> </div>
            </div>
            <div>
                <div class="flex items-center space-x-5 ">
                    <a href="">
                        <div
                            class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                            <p>Get in Touch</p>
                        </div>
                    </a>
                    <div> <a href=""> <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12"> </a> </div>
                    {{-- <x-menubar /> --}}
                </div>
            </div>
        </div>
    </div>
    <div style="position: fixed;left: 0;width: 100%;bottom: 0;z-index: 50">
        <div class="flex space-x-1 px-40">
            <div class="w-1/3"></div>
            <div class="w-1/3 flex justify-center">
                <a href="" class="-mb-10">
                    <img src="{{ asset('assets/images/scroll.png') }}" alt="" style="width: 100%;transform: scale(.7);">
                </a>
            </div>
            <div class="w-1/3 flex space-x-2 pt-7 pb-5 px-10">
                <div class="flex py-5 border-b-2 border-white w-1/5">
                    <i class="fa fa-home text-white icon-page mx-auto self-end" ></i>
                </div>
                <div class="flex py-5 border-b-2 border-white w-1/5">
                    <i class="fa fa-city text-white icon-page mx-auto self-end"></i>
                </div>
                <div class="flex py-5 border-b-2 border-white w-1/5">
                    <i class="fas fa-cube text-white icon-page mx-auto self-end"></i>
                </div>

                <div class="flex py-5 border-b-2 border-white w-1/5">
                    <i class="fas fa-cube text-white icon-page mx-auto self-end"></i>
                </div>

                <div class="flex py-5 border-b-2 border-white w-1/5">
                    <i class="fas fa-envelope text-white icon-page mx-auto self-end"></i>
                </div>
                <!-- <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                </div>
                <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                </div>
                <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                </div>
                <div class="flex py-5 border-b-2 border-white opacity-20 w-1/5">
                </div> -->
            </div>
        </div>
    </div>
    <main style="width: 100vw;overflow: hidden;height: 100vh" class="main">
        <section class="section section-1 w-screen h-screen overflow-x-hidden"
           style="background-image: url({{ asset('assets/images/bg.png') }}); background-position:
            center; background-repeat: no-repeat; background-size: cover;position: relative;z-index: 1;">
            <div class="content">
                <div class=" pt-20  " style="padding-left: 10%"> 
                    <h1 class="stroke--text-white leading-none mt-10 " style="font-size: 700%">Amazing</h1>
                    <h1 class="text-white font--gilroy-bold leading-none -mr-5" style="font-size: 800%;">
                        <span class="font-bold">Creativity</span> <span class="font--gilroy-reg">+ Vision</span>
                    </h1>
                </div>
                <div class="flex py-10">
                    <div class="w-1/2"></div>
                    <div class="w-1/2">
                        <h4 class="text-white ml-20 leading-8" style="font-size: 100%">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to
                        </h4>
                    </div>
                </div>
                <div style="position: absolute;left:0;bottom: 0;width: 100vw">
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
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-2 px-0 m-container  h-screen w-screen" style="background-image: url({{ asset('assets/images/bg.png') }}); background-position:
            center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex justify-center pt-20">
                <img src="{{ asset('assets/images/about-us.png') }}" alt="" class="w-60">
            </div>
            <div class=" pt-10 space-y-5">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 600%;">
                    A little <span class="stroke--text-white" style="font-size: 100%;">about</span> us
                </h1>
                <h4 class="text-white leading-10 text-center" style="font-size: 100%;">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to
                </h4>
            </div>
            
        </section>
         <section class="section section-3 m-container space-y-20 h-screen w-screen" style="background: #131313">
            <div class="flex">
                <div class="w-1/4">
                    <img src="{{ asset('assets/images/service1.png') }}" alt="" style="width: 100%">
                </div>
                <div class="w-3/4"></div>
            </div>
            <div class="flex space-x-10">
                <div class="w-3/5">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                        Services we <br/><span class="stroke--text-white" style="font-size: 90%;">Provide</span>
                    </h1>
                    <h4 class="text-white leading-10" style="font-size: 100%">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h4>
                </div>
                <div class="w-2/5 self-end" >
                    <img src="{{ asset('assets/images/service.png') }}" alt="" >
                </div>
            </div>
        </section>
        <section class="section section-4 m-container pt-20 h-screen w-screen" style="background: #9c6b6b">
            <div class="flex ">
                <div class="w-2/5">
                    <img src="{{ asset('assets/images/iphone-group.png') }}" alt="" class="-ml-40">
                </div>
                <div class="w-3/5 flex-col">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                        App<br>Development
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
        <section class="section section-5 m-container pt-20 h-screen w-screen" style="background: #CC7F5E">
            <div class="flex">
                <div class="w-2/5">
                    <img src="{{ asset('assets/images/ss.png') }}" alt="" class="-ml-40">
                </div>
                <div class="w-3/5 flex-col space-y-10 ">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                        Web<br>Development
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
                <section class="section section-6 m-container pt-20  h-screen w-screen" style="background: #DFAF53">
            <div class="flex my-20 ">
                <div class="w-2/5 px-10">
                    <img src="{{ asset('assets/images/seo.png') }}" alt="" >
                </div>
                <div class="w-3/5 flex-col space-y-10  ">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        SEO
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
        <section class="section section-7 pt-20 m-container h-screen w-screen" style="background: #BFBB92">
            <div class="flex my-20 ">
                <div class="w-2/5 px-10">
                    <img src="{{ asset('assets/images/ig-post.png') }}" alt="" class="">
                </div>
                <div class="w-3/5 flex-col space-y-10 ">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        Social Media Marketing
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
        <section class="section section-8 pt-20 m-container  h-screen w-screen" style="background: #A6C092">
            <div class="flex my-20">
                <div class="w-2/5  px-10">
                    <img src="{{ asset('assets/images/content.png') }}" alt="" >
                </div>
                <div class="w-3/5 flex-col space-y-10">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        Content Marketing
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
            
        </section>
        <section class="section section-9 pt-20 m-container  h-screen w-screen" style="background: #91C2B7">
            <div class="flex my-20">
                <div class="w-2/5 px-10">
                    <img src="{{ asset('assets/images/graphic-design.png') }}" alt="" >
                </div>
                <div class="w-3/5 flex-col space-y-10">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        Graphic <br> Design
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
        <section class="section section-10 pt-20 m-container  h-screen w-screen" style="background: #97ACC6">
            <div class="flex my-20">
                <div class="w-2/5 px-10">
                    <img src="{{ asset('assets/images/logo-designing.png') }}" alt="" >
                </div>
                <div class="w-3/5 flex-col space-y-10">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        Logo <br> Designing
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
        <section class="section section-11 pt-20 m-container  h-screen w-screen" style="background: #9993C2">
            <div class="flex my-10">
                <div class="w-2/5 px-10">
                    <img src="{{ asset('assets/images/production.png') }}" alt="" >
                </div>
                <div class="w-3/5 flex-col space-y-10">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        Production
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
        <section class="section section-12 pt-20 m-container  h-screen w-screen" style="background: #BF96C6">
            <div class="flex my-10">
                <div class="w-2/5 px-10">
                    <img src="{{ asset('assets/images/travel-pamflet.png') }}" alt="" >
                </div>
                <div class="w-3/5 flex-col space-y-10">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        Digital Printing Service
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
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
        </section>
        <section class="section section-13 pt-20 m-container  h-screen w-screen" style="background: #C99CB4">
            <div class="flex mt-10 mb-40 space-x-10">
                <div class="w-2/3 flex-col space-y-10 mr-20">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                        Our <span class="stroke--text-white" style="font-size: 100%">Works</span>
                    </h1>
                    <h4 class="text-white leading-10 mr-36" style="font-size: 100%;">
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
        </section>
        <section class="section section-14 m-container  h-screen w-screen justify-between"
            style="background: #C59595;position: relative;">
            <div style="position: absolute;left:0;top: 0;width: 100%;height: 100%;z-index: 1">
                <div class="flex " >
                    <div class="w-2/3">
                        <img src="{{ asset('assets/images/goals/goals-1.png') }}" alt="" srcset="">
                        <img src="{{ asset('assets/images/goals/goals-2.png') }}" alt="" srcset="">

                    </div>
                    <div class="w-1/3">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="items-center" style="z-index: 2;position: relative;display: inline-block;padding-top: 20%">
                    <div class="m-container">
                        <h1 class="text-white font--gilroy-bold leading-none text-left" style="font-size: 700%;">
                            Goals <span class="stroke--text-white" style="font-size: 100%">App</span>
                        </h1>
                        <h6 class="font--gilroy-bold text-white uppercase text-lg text-left" >App
                            Development</h6>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-15 px-40 h-screen w-screen"
            style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">
            <div class="flex p-20 justify-between items-center -ml-10 mr-20">
                <div>
                    <img src="{{ asset('assets/images/hovertoview.png') }}" alt="" style="width: 70%">
                </div>
                <div>
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                        Blogs
                    </h1>
                </div>
            </div>
            <div class="flex justify-between items-center space-x-20 mr-60 -mt-10">
                <div class="p-2 rounded border border-white">
                    <img class="images" src="{{ asset('assets/images/blogs/blog-1.png') }}" alt="" class="rounded">
                </div>
                <div class="p-2 rounded border border-white">
                    <img class="images" src="{{ asset('assets/images/blogs/blog-2.png') }}" alt="" class="rounded">
                </div>
                <div class="p-2 rounded border border-white">
                    <img class="images" src="{{ asset('assets/images/blogs/blog-3.png') }}" alt="" class="rounded">
                </div>
            </div>
            <div class="flex justify-between items-end -mt-10 mb-10">
                <div class="w-2/3 flex space-x-10">
                    <h6 class="text-white text-base leading-none">connect@us.solutiommedia</h6>
                    <h6 class="text-white text-base leading-none">+91 8123632783</h6>
                </div>
                
            </div>
        </section>

        <section class="section section-16 pt-20 m-container h-screen w-screen"
            style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">
            <div class="flex mb-10 justify-center">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 300%">
                    What our <span class="stroke--text-white" style="font-size: 100%;">Clients say</span>
                </h1>
            </div>
            <div class="flex">
                <div class="w-2/5 flex ml-20">
                    <div class="self-end">
                        <img src="{{ asset('assets/images/client/client-7.png') }}" alt="">
                    </div>
                    <div class="self-center">
                        <img src="{{ asset('assets/images/client/client-2.png') }}" alt="">
                    </div>
                    <div class="self-center -mb-40">
                        <img src="{{ asset('assets/images/client/client-3.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/5">
                    <img src="{{ asset('assets/images/client/client-1.png') }}" alt="" class="h-auto m-auto">
                </div>
                <div class="w-2/5 flex mr-20justify-center ml-10">
                    <div class="self-end justify-center">
                        <img src="{{ asset('assets/images/client/client-4.png') }}" alt="" class="-mt-28">
                    </div>
                    <div class="self-center">
                        <img src="{{ asset('assets/images/client/client-5.png') }}" alt="">
                    </div>
                    <div class=" items-center justify-evenly">
                        <img src="{{ asset('assets/images/client/client-8.png') }}" alt="" class="w-16 h-auto">
                        <img src="{{ asset('assets/images/client/client-6.png') }}" alt="" class="-mb-32">
                    </div>
                </div>
            </div>
            <div class=" px-20">
                <div class="flex space-x-10 my-10">
                    <div class="w-1/5 flex justify-end">
                        <img src="{{ asset('assets/images/arrow-left.png') }}" alt="" class="w-8 h-8">
                    </div>
                    <div class="w-3/5 space-y-10">
                        <h4 class="text-white font--gilroy-bold  text-center" style="font-size: 150%">
                            Lectus arcu bibendum at varius. Adipiscing diam donec adipiscing tristique.
                        </h4>
                        <h5 class="text-white font--gilroy-bold text-lg text-center">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-purple-700">Kerry
                                Johnes</span> -
                            Some Company
                        </h5>
                    </div>
                    <div class="w-1/5 flex">
                        <img src="{{ asset('assets/images/arrow-right.png') }}" alt="" class="w-8 h-8">
                    </div>
                </div>
            </div>
            
        </section>
        <section class="section section-17 pt-20 m-container h-screen w-screen"
            style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">
            <div class="">
                <h2 class="font--gilroy-bold text-white text-center" style="font-size: 300%">Newsletter</h2>
                <h4 class="text-gray-500 text-center leading-10" style="font-size: 100%">
                    We are a UI/UX (user interface / user experience) design & development company. We have helped
                    multiple clients from small medium businesses to big brands from various industry to create their
                    website / mobile apps user experiences .
                </h4>
            </div>
            <div class="flex ">
                <div class="w-1/2">
                    <img src="{{ asset('assets/images/mailbox.png') }}" alt="" class="w-96 h-auto">
                </div>
                <div class="w-1/2 ">
                    <form action="" class=" space-y-5 pt-20 pb-40">
                        <div>
                            <input type="text"
                            class="form-control w-full py-3 px-5 placeholder-white text-white rounded focus:outline-none focus:ring focus:border-blue-500"
                            placeholder="Full Name" style="background: #313131">
                        </div>
                        <div>
                            <input type="text"
                            class="form-control w-full py-3 px-5 placeholder-white text-white rounded focus:outline-none focus:ring focus:border-blue-500"
                            placeholder="Enter your mail-id" style="background: #313131">
                        </div>
                        <div>
                            <button
                            class="py-3 bg-white w-full text-center font--gilroy-med text-gray-700 rounded hover:bg-gray-500 hover:text-white transition duration-300">Signup</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>
        <section class="section section-18 pt-20 m-container h-screen w-screen" style="background-image: url({{ asset('assets/images/bg.png') }}); background-position:center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex ">
                <div class="w-1/2 space-y-5">
                    <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 300%">
                        Connect
                    </h1>
                    <h4 class="text-white text-lg" style="font-size: 100%">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to
                        live for world-class brands to make your products to
                    </h4>
                    <form action="">
                        <div class=" space-y-5 ">
                            <input type="text"
                                class=" w-full bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                                placeholder="Full Name">
                            <input type="text"
                                class=" w-full bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                                placeholder="Enter your mail-id">
                            <input type="text"
                                class=" w-full bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                                placeholder="Phone Number">
                            <input type=" w-full text"
                                class="bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                                placeholder="Reason to connect">
                            <button
                                class=" w-full bg-white py-3 text-gray-700 hover:bg-gray-500 hover:text-white transition duration-300 rounded">
                                SignUp
                            </button>
                        </div>
                    </form>
                </div>
                <div class="w-1/2  items-center">
                    <div class="flex z-0">
                        <h1 class="stroke--text-white leading-none -mb-28 -ml-80 opacity-10" style="font-size: 600%;">
                            Connect
                        </h1>
                    </div>
                    <img src="{{ asset('assets/images/3d-man.png') }}" alt="" class="w-96 h-auto z-10">
                    <div class="flex w-12 h-12 bg-white rounded-full self-end">
                        <i class="fab fa-whatsapp m-auto text-xl"></i>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-end px-10 ">
                <div class="w-2/3 flex space-x-10">
                    <h6 class="text-white text-base leading-none">
                        <i class="fas fa-envelope"></i>&ensp;connect@us.solutiommedia
                    </h6>
                    <h6 class="text-white text-base leading-none">
                        <i class="fas fa-phone-alt"></i>&ensp;+91 8123632783
                    </h6>
                </div>
            </div>
        </section>
        <x-footer />

    </main>
</div>

@include('blogs.insights')

@endsection

@push('scripts')
<script>
    var totalSection  = document.querySelectorAll('.section').length;
    tl = gsap.timeline({
            defaults: {duration: 1},
            // opacity:0,
            scrollTrigger:{
                trigger:".main",
                pin:".main",
                scrub:true,
                markers:true,
                start:"top top",
                // snap:1/4,
                end :()=> "+="+document.querySelector('.main').offsetHeight*totalSection,
            }
        })
    gsap.set('body',{overflowX:'hidden'})

    gsap.utils.toArray(".section").forEach(function(elem,i) {
        gsap.set(elem,{zIndex:(totalSection-i+5),position:'absolute'})
        tl.fromTo(elem,{opacity:1,duration:2},{opacity:0})
        
    });
    // tl.fromTo('.section-1',{opacity:1,duration:2},{opacity:0})
    // tl.fromTo('.section-2',{opacity:1,duration:2},{opacity:0})
    // tl.fromTo('.section-3',{opacity:1,duration:2},{opacity:0})
    // tl.fromTo('.section-1 .content',{opacity:0},{opacity:1})
    // tl.to('.section-1',{y:100})
    // tl = gsap.timeline({
    //     scrollTrigger:{
    //         trigger:'.section section-1',
    //         pin:true,
    //         scrub:true,
    //         markers:true,
    //         start:"top top"
    //     }
    // })
    // gsap.to('.bg-grad-2',{opacity:0,repeat:-1,duration:10,yoyo:true})
    // gsap.utils.toArray(".section").forEach(function(elem,i) {
        // section1 = gsap.timeline({
        //     scrollTrigger:{
        //         trigger:'.section section-1',
        //         pin:true,
        //         scrub:true,
        //         markers:true,
        //         start:"top top"
        //     }
        // })
        // section1.to('.section section-1',{
        //     // y:"100%"
        // })
        // section1 = gsap.timeline({
        //     scrollTrigger:{
        //         trigger:'.section section-2',
        //         pin:true,
        //         scrub:true,
        //         markers:true,
        //         start:"top top"
        //     }
        // })
    // });

    $('.images').mouseenter(function(e){
        e.preventDefault()
        console.log('yayayyay');
        const image = $(this).attr('src')
        $('.preview-image').attr('src', image)
        $('.modal').addClass('active');
    })

    $(document).on('click', '.modal', function (e) {  
        e.preventDefault();
        $('.modal').removeClass('active');
    })
</script>
@endpush