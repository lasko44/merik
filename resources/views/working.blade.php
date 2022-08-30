@extends('layouts.app')
@section('content')

    <div class="hero">
        <img src="{{asset('images/gear.jpeg')}}" alt="Merik Custom Software">
        <div class="row shade-left">
            <div class="col-4">
                <div class="row">
                    <a href="{{route('home')}}">
                        <img class="img-fluid p-5" src="{{asset('images/logo.jpg')}}" alt="Merik LLC">
                    </a>
                </div>
            </div>
            <div class="col-8 d-flex align-items-baseline">
                <h1 class="text-white hero-title">You have the gears turning</h1>
            </div>
        </div>
    </div>
    @include('partials.hamburger')
    <div class="container-85 m-bottom-20 m-top-10">
        <h2>We’ll get the engine running</h2>
        <div class="text-block">
            <p>Where ever you are with your project  we can get <br> you to the finish line.</p>
        </div>
        <div class="text-block">
            <p>Anything from just an idea to a completed website <br> with nowhere to host we can help.</p>
        </div>
        <div class="text-block">
            <p>We will take a personalized approach to your project and <br> get you the tools you need to be succeed.</p>
        </div>
        <div class="text-block">
            <p>Merik specializes in Ecommerce, Administrative Portals, <br> and Custom Content Management Systems</p>
        </div>
        <div class="row justify-content-end m-top-3">
                <a href="#" class="black-btn p-2">
                    Get in Touch
                </a>
        </div>
    </div>
@endsection
