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
        <section class="flex flex-col py-10 space-y-20 min-h-screen w-screen" style="background: #1C1C1C">
            <div class="flex justify-end">
                <h1 class="text-white font--gilroy-bold opacity-30 leading-none -mr-32 -mb-60"
                    style="font-size: 400px;">00
                </h1>
            </div>
            <div class="flex flex-col px-20 my-auto -mb-20">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 140px;">
                    Our Process
                </h1>
                <h4 class="text-white text-opacity-50 text-xl w-3/5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum arcu eu cras egestas ac
                    adipiscing. Et arcu, elementum molestie sed bland
                </h4>
            </div>
            <div class="flex">
                <div class="w-1/3"></div>
                <div class="w-1/3 flex justify-center">
                    <div class="self-end">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/3 flex flex-col space-y-5">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home"></i>
                        <hr class="w-28 border-t border-white">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">01</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">02</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">03</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">04</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark py-20 min-h-screen w-screen flex flex-col">
            <div class="px-20 flex justify-end">
                <h1 class="text-white font--gilroy-bold opacity-30 leading-none -mr-10 -mb-64"
                    style="font-size: 400px;">01
                </h1>
            </div>
            <div class="flex flex-col mx-auto">
                <div class="flex items-center space-x-2">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">01</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 220px">Planning</h1>
                <div class="flex">
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your pro
                            .
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/3">

                </div>
                <div class="w-1/3 flex justify-center">
                    <div class="self-end">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/3 flex flex-col space-y-5">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">01</p>
                        <hr class="w-28 border-t border-white">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">02</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">03</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">04</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                </div>
            </div>
        </section>
        <section class="min-h-screen w-screen py-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex">
                <img src="{{ asset('assets/images/desktop/planning.png') }}" alt="" class="mx-auto">
            </div>
            <div class="flex justify-center">
                <div class="w-1/5">

                </div>
                <div class="w-3/5 flex flex-col justify-center items-center space-y-16">
                    <div class="flex flex-col space-y-5">
                        <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                            Planning
                        </h1>
                        <h4 class="text-white text-center leading-10" style="font-size: 19px">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to
                            live for world-class brands to make your products to for world-class brands to make your
                            products to
                            live for world-class brands to for world-class brands.
                        </h4>
                    </div>
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/5 flex flex-col space-y-5 justify-end py-10">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">01</p>
                        <hr class="w-28 border-t border-white">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">02</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">03</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">04</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark min-h-screen w-screen flex flex-col py-20">
            <div class="flex flex-col mx-auto mt-20">
                <div class="flex items-center space-x-2">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">02</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 220px">Research</h1>
                <div class="flex px-20">
                    <div class="w-1/2"></div>
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your
                            pro.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-1/3">
                    <h1 class="text-white font--gilroy-bold opacity-30 leading-none -ml-20" style="font-size: 400px;">
                        02
                    </h1>
                </div>
                <div class="w-1/3 flex justify-center items-end">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex flex-col space-y-5 justify-end py-10">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">01</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">02</p>
                        <hr class="w-28 border-t border-white">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">03</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">04</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                </div>
            </div>
        </section>
        <section class="min-h-screen w-screen py-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex">
                <img src="{{ asset('assets/images/desktop/research.png') }}" alt="" class="mx-auto">
            </div>
            <div class="flex justify-center">
                <div class="w-1/5">

                </div>
                <div class="w-3/5 flex flex-col justify-center items-center space-y-16">
                    <div class="flex flex-col space-y-5">
                        <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                            Research
                        </h1>
                        <h4 class="text-white text-center leading-10" style="font-size: 19px">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to for world-class brands to
                            make your products to live for world-class brands to for world-class brands.
                        </h4>
                    </div>
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/5 flex flex-col space-y-5 justify-end py-10">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">01</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">02</p>
                        <hr class="w-28 border-t border-white">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">03</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">04</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark min-h-screen w-screen flex flex-col py-20">
            <div class="flex flex-col mx-auto mt-20">
                <div class="flex items-center space-x-2 ml-60">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">03</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 220px">Development</h1>
                <div class="flex px-20 mt-10">
                    <div class="w-1/2"></div>
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your
                            pro.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-1/3">
                    <h1 class="text-white font--gilroy-bold opacity-30 leading-none -ml-20" style="font-size: 400px;">
                        03
                    </h1>
                </div>
                <div class="w-1/3 flex justify-center items-end">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex flex-col space-y-5 justify-end py-10">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">01</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">02</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">03</p>
                        <hr class="w-28 border-t border-white">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">04</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                </div>
            </div>
        </section>
        <section class="min-h-screen w-screen py-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex">
                <img src="{{ asset('assets/images/desktop/development.png') }}" alt="" class="mx-auto">
            </div>
            <div class="flex justify-center">
                <div class="w-1/5">

                </div>
                <div class="w-3/5 flex flex-col justify-center items-center space-y-16">
                    <div class="flex flex-col space-y-5">
                        <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                            Development
                        </h1>
                        <h4 class="text-white text-center leading-10" style="font-size: 19px">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to for world-class brands to
                            make your products to live for world-class brands to for world-class brands.
                        </h4>
                    </div>
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/5 flex flex-col space-y-5 justify-end py-10">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">01</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">02</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">03</p>
                        <hr class="w-28 border-t border-white">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">04</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark min-h-screen w-screen flex flex-col py-20">
            <div class="flex flex-col mx-auto mt-20">
                <div class="flex items-center space-x-2 ml-60">
                    <h4 class="text-white font--gilroy-bold opacity-50" style="font-size: 50px;">04</h4>
                    <hr class="w-80" style="border: 1px solid #5C5C5C">
                </div>
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 220px">Deployment</h1>
                <div class="flex px-20 mt-10">
                    <div class="w-1/2"></div>
                    <div class="w-1/2">
                        <p class="text-white opacity-60">
                            for world-class brands to make your products to live for world-class brands to make your
                            pro.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-1/3">
                    <h1 class="text-white font--gilroy-bold opacity-30 leading-none -ml-20" style="font-size: 400px;">
                        04
                    </h1>
                </div>
                <div class="w-1/3 flex justify-center items-end">
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/3 flex flex-col space-y-5 justify-end py-10">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">01</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">02</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">03</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">04</p>
                        <hr class="w-28 border-t border-white">
                    </div>
                </div>
            </div>
        </section>
        <section class="min-h-screen w-screen py-20"
            style="background-image: url({{ asset('assets/images/bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex">
                <img src="{{ asset('assets/images/desktop/deployment.png') }}" alt="" class="mx-auto">
            </div>
            <div class="flex justify-center">
                <div class="w-1/5">

                </div>
                <div class="w-3/5 flex flex-col justify-center items-center space-y-16">
                    <div class="flex flex-col space-y-5">
                        <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 90px">
                            Deployment
                        </h1>
                        <h4 class="text-white text-center leading-10" style="font-size: 19px">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to for world-class brands to
                            make your products to live for world-class brands to for world-class brands.
                        </h4>
                    </div>
                    <a href="" class="">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
                <div class="w-1/5 flex flex-col space-y-5 justify-end py-10">
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <i class="fas fa-home text-white text-opacity-30"></i>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">01</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">02</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-opacity-30 text-lg">03</p>
                        <hr class="w-20 border-t border-white border-opacity-30">
                    </div>
                    <div class="flex items-center text-white space-x-3 justify-end">
                        <p class="font--gilroy-bold text-white text-lg">04</p>
                        <hr class="w-28 border-t border-white">
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