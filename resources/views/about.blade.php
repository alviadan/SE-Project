@extends('layouts.main')

@section('container')
    {{-- <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="alvian_daniel" width="200" class="img-thmbnail rounded-circle"> --}}
    <div class="main d-flex justify-content-between">
        @include('partials.leftRectHome')
        @include('partials.midRectAbout')
        @include('partials.rightRectHome')
    </div>

@endsection
