@extends('layouts.layout')

@section('title')
    @parent:: {{ $title }}
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $title }}</h1>
            </div>
        </div>
    </section>


    <div class="container">
        <form class="mt-5" method="post" action="{{ route('posts.store') }}">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                       value="{{old('title')}}">
                @error('title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-4">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="5" name="content" placeholder="Content"
                          value="{{old('content')}}"></textarea>
                @error('content')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-4">
                <label for="rubric_id">Rubric</label>
                <select class="form-control" id="rubric_id" name="rubric_id">
                    <option>Select rubric</option>
                    @foreach($rubrics as $k => $v)
                        <option value="{{ $k }}"
                                @if(old('rubric_id') == $k)
                                    selected
                                @endif
                        >{{ $v }}</option>
                    @endforeach
                </select>
                @error('rubric_id')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>

        </form>
    </div>

@endsection
