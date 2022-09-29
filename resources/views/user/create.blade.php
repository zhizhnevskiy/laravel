@extends('layouts.layout')

@section('title')
    @parent:: Registration
@endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <form method="post" action="{{ route('register.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"
                       class="form-control @error('name') is-invalid @enderror"
                       id="name"
                       name="name"
                       value="{{old('name')}}"
                >
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       id="email"
                       name="email"
                       value="{{old('email')}}"
                >
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       id="password"
                       name="password"
                >
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password"
                       class="form-control @error('password_confirmation') is-invalid @enderror"
                       id="password"
                       name="password_confirmation"
                >
                @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file"
                       class="form-control @error('avatar') is-invalid @enderror"
                       id="avatar"
                       name="avatar"
                >
                @error('avatar')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-2">Register</button>

        </form>
    </div>

@endsection
