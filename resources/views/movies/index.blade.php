<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>movie index</title>
</head>
<body>

<h1>movie index</h1>
@foreach ($movies as $movie )
    <div>
        <a href="/movies/{{ $movie->id}}">
            <h2>{{ $movie->movie_title}}</h2>
            <img src="{{ $movie->movie_image }}" alt="{{ $movie->movie_title}}" title="{{ $movie->movie_title}}">
        </a>
    </div>
@endforeach
</body>
</html>
