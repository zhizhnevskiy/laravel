@extends('layouts.layout')

@section('title')
    @parent:: Send mail
@endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <div class="alert alert-success">
            Email sent!
        </div>
    </div>

@endsection
