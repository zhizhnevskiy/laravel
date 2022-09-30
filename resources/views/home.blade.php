@extends('layouts.layout')

@section('title')
    @parent:: {{ $title }}
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        {!! mb_strtoupper($h1) !!}
        @{{ variable from js framework }}
        <br>
        @if(count($data) > 1)
            Count = {{ count($data) }}
            @foreach($data as $key => $value)
                <br>
                {{ $key }} = {{ $value }}
            @endforeach
        @endif
    </div>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $title }}</h1>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)

                    <div class="col">
                        <div class="card shadow-sm">

                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em" dx="-3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-title">{{ $post->title }}</p>
                                <p class="card-text">{{ $post->content }}</p>
                                @foreach($post->tags as $tag)
                                    #{{ $tag->title }},
                                @endforeach
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">
                                        {{--                                        {{ $post->created_at }}--}}
                                        {{--                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)--}}
                                        {{--                                            ->format('d.m.Y (H:i)')}}--}}
                                        {{ $post->getPostDate() }}
                                    </small>
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach
                <div class="col-md-12 mt-4">
                    {{ $posts->links('vendor.pagination.my-pagination') }}
                </div>
            </div>
        </div>
    </div>

@endsection
