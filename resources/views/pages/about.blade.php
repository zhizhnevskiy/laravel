@extends('layouts.layout')

@section('title')
    @parent:: {{ $title }}
@endsection

@section('header')
    @parent
    <div class="container">
        <h2>About Content</h2>
    </div>
@endsection

@section('content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">About Page</h1>
            </div>
        </div>
    </section>

@endsection


