<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('contact') }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name">
    <input type="email" name="mail">
    <button type="submit">Submit</button>
</form>
<p>Zhizhnevskiy {{ $date }}</p><br>

{{ route('post_id', ['id' => 777]) }}
</body>
</html>
