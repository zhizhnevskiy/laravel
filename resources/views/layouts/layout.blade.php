<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>
        @section('title')
            My site
        @show
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

@include('layouts.header')

<main>
    <div class="container">
        @include('layouts.alerts')
    </div>
    @yield('content')
</main>

@include('layouts.footer')

<script src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>
