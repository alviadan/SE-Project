@extends('layouts.main')

@section('container')

<div class="main d-flex justify-content-between">
    @include('partials.leftRectHome')
    @include('partials.midRectHome')
    @include('partials.rightRectHome')
</div>
@endsection

