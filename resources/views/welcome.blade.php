@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <img class="img-fluid p-5" src="{{asset('images/logo.jpg')}}" alt="Merik LLC">
            </div>
            <div class="row">
                <h1 class="px-5  ">Web Application <br>
                    Development and <br>
                    Technology Consulting</h1>
            </div>
            <div class="row m-top-10 m-bottom-5">
                <div class="px-5">
                    <a href="#" class="black-btn p-2">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <a class="link-item" href="{{route('working')}}">
                    <div class="height-50 bg-black gear">
                        <img src="{{asset('images/gear.jpeg')}}" alt="Merik Custom Software">
                        <div class="shade"></div>
                        <h2 class="px-3 display-5">Already Have <br> Something in the <br> Works?</h2>
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="height-50 bg-black">
                    <div class="dark-container">
                        <div class="light-container">
                            <div class="light"></div>
                        </div>
                        <h2 class="px-3 display-5">Lost in the Dark?</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
