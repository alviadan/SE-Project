<link rel="stylesheet" href="css/landing.css">

@extends('layouts.main')

@section('container')

<div class="landing">
    <div class="landing container m-0 pt-5 pb-3 h-100">
        <div class="d-block">
            <h1 class=" fw-bold" >Welcome to<br>FindContractor</h1>
            <p class= "text-secondary w-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p</p>

            <hr class="solid mt-3 mb-2 border-2">

            <h2 class="fw-bold">Which one are you ?</h2>
            <div class="ilustration d-flex justify-content-between">
                <a href="/">
                    <img src="img/nenek.png" height="225px" width="325px"  class="object-fit-cover" alt="nenek">
                    <div class="rect1"></div>
                </a>

                <a href="/">
                    <img src="img/kakek.png" alt="kakek" height="400px" width="400px" class="object-fit-cover">
                    <div class="rect2"></div>
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
