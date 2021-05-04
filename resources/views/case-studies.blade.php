@extends('layouts.app')
@section('content')
<div class="flex flex-col h-screen">
    <div class="fixed px-10 top-0 left-0 z-20">
        <div>
            <a href="">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="fixed px-20 top-0 right-0 py-10 z-20">
        <div>
            <a href="">
                <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12">
            </a>
        </div>
    </div>

    <main class="flex-1 overflow-y-auto bg-gray-50">
        <section class="p-20 flex flex-col"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height: 140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="w-2/3 mt-20">
                <h1 class="text-white text-7xl" style="font-family: Gilroy-Bold;">
                    We Break boundaries to craft extraordinary experiences.
                </h1>
            </div>
            <div class="flex">
                <div class="w-2/3">
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                </div>
                <div class="w-1/3 flex justify-end px-10">
                    <a href="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
            </div>

        </section>

        <section class="relative p-20 z-10 bg--dark">
            <div class="flex flex-col -mt-96 space-y-20">
                <div class="flex flex-col space-y-10">
                    <div class="flex space-x-20">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/images/arch.png') }}" alt="">
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('assets/images/talky.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex space-x-20">
                        <div class="w-1/2">
                            <div class="flex flex-col space-y-3">
                                <h3 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                                    Arch Logo Design
                                </h3>
                                <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                                    Logo Design
                                </h4>
                                <h5 class="text-white text-opacity-50" style="font-size: 17px;">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="flex flex-col space-y-3">
                                <h3 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                                    Talky | v.1.0
                                </h3>
                                <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                                    APP DESIGN
                                </h4>
                                <h5 class="text-white text-opacity-50" style="font-size: 17px;">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col space-y-10">
                    <div class="flex space-x-20">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/images/arch.png') }}" alt="">
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('assets/images/talky.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex space-x-20">
                        <div class="w-1/2">
                            <div class="flex flex-col space-y-3">
                                <h3 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                                    Arch Logo Design
                                </h3>
                                <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                                    Logo Design
                                </h4>
                                <h5 class="text-white text-opacity-50" style="font-size: 17px;">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="flex flex-col space-y-3">
                                <h3 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                                    Talky | v.1.0
                                </h3>
                                <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                                    APP DESIGN
                                </h4>
                                <h5 class="text-white text-opacity-50" style="font-size: 17px;">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col space-y-10">
                    <div class="flex space-x-20">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/images/roady.png') }}" alt="">
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('assets/images/water-flow.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex space-x-20">
                        <div class="w-1/2">
                            <div class="flex flex-col space-y-3">
                                <h3 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                                    Roady V3.0 Ilustration
                                </h3>
                                <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                                    ILLUSTTRATION DESIGN
                                </h4>
                                <h5 class="text-white text-opacity-50" style="font-size: 17px;">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="flex flex-col space-y-3">
                                <h3 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                                    Water-Flow App Design
                                </h3>
                                <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                                    APP DESIGN
                                </h4>
                                <h5 class="text-white text-opacity-50" style="font-size: 17px;">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-20 bg--dark">
            <div class="flex space-x-20">
                <div class="w-7/12">
                    <h1 class="text-white text-7xl" style="font-family: Gilroy-Bold;">
                        Connect
                    </h1>
                    <h5 class="text-white text-xl mt-5" style="font-size: 17px; color: #A0A0A0;">
                        for world-class brands to make your products to live for world-class brands to make
                        your
                        products to live for world-class brands to make your products to
                    </h5>
                    <div class="flex flex-col my-20 space-y-10">
                        <div>
                            <input type="email" placeholder="Email Address"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                        <div>
                            <input type="text" placeholder="Full Name"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                        <div>
                            <input type="text" placeholder="Reason to contact"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                    </div>
                </div>
                <div class="w-5/12">
                    <div class="-mx-20 -mt-10">
                        <h1 class="text-transparent"
                            style="font-family: Gilroy-Bold; font-size: 170px; font-weight: 600; -webkit-text-stroke: 2px rgba(160, 160, 160, 0.1);">
                            Connect
                        </h1>
                    </div>
                    <div class="flex flex-col space-y-10 box--dark p-10 rounded-xl">
                        <div>
                            <h5 class="uppercase text-gray-400">Address</h5>
                            <h6 class="text-white">hno-3/34/220 , gujarat , India</h6>
                        </div>
                        <div>
                            <h5 class="uppercase text-gray-400">Email</h5>
                            <h6 class="text-white">Connect@us.solutiommedia</h6>
                        </div>
                        <div>
                            <h5 class="uppercase text-gray-400">Phone Number</h5>
                            <h6 class="text-white">+91 8123632783</h6>
                        </div>
                        <div class="flex justify-end">
                            <a href="">
                                <div class="flex h-12 w-12 bg-white rounded-full -mt-10">
                                    <i class="fab fa-whatsapp m-auto text-2xl"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <button class="box--dark font--gilroy-md w-full p-3 rounded-xl text-white">Send</button>
            </div>
        </section>

        <section class="p-20" style="background-image: linear-gradient(to bottom right, #3E3E3E, #0D0D0D);">
            <div class="flex flex-col text-center space-y-10 mt-10 -mb-20">
                <div class="flex flex-col space-y-3">
                    <h1 class="text-white text-7xl" style="font-family: Gilroy-Bold;">
                        Creativity + Efficiency
                    </h1>
                    <h5 class="text-white uppercase" style="font-size: 15px;">
                        Developed in India With &ensp;<i class="fas fa-heart text-red-500"></i>
                    </h5>
                </div>
                <h6 class="text-gray-400" style="font-size: 18px;">
                    We are a UI/UX (user interface / user experience) design & development company. We have helped
                    multiple clients from small medium businesses to big brands from various industry to create
                    their website / mobile apps user experiences.
                </h6>
                <div class="flex justify-center space-x-10">
                    <div class="flex flex-col space-y-3">
                        <h3 class="text-gray-400 uppercase">Quick Links</h3>
                        <h3 class="text-white" style="font-weight: 500;">Home</h3>
                        <h3 class="text-white" style="font-weight: 500;">Portfolio</h3>
                        <h3 class="text-white" style="font-weight: 500;">Career</h3>
                        <h3 class="text-white" style="font-weight: 500;">Contact Us</h3>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <h3 class="text-gray-400 uppercase">Social Media</h3>
                        <h3 class="text-white" style="font-weight: 500;">Instagram</h3>
                        <h3 class="text-white" style="font-weight: 500;">Facebook</h3>
                        <h3 class="text-white" style="font-weight: 500;">Twitter</h3>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <h3 class="text-gray-400 uppercase">About</h3>
                        <h3 class="text-white" style="font-weight: 500;">Terms</h3>
                        <h3 class="text-white" style="font-weight: 500;">Privacy</h3>
                    </div>
                </div>
                <div class="flex justify-center space-x-10 pt-10">
                    <a href="" class="text-white">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="" class="text-white">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="" class="text-white">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                </div>
                <div class="flex justify-center space-x-10 pt-14 text-white">
                    <h4 class="mb-5">&copy; 2021 @solution_media</h4>
                    <h4 class="mb-5">connect@solutionmedia</h4>
                    <h4 class="mb-5">+040 37434623</h4>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection