<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Moviebase</title>
    </head>
    <body>

          <h1>Moviebase</h1>
        <div>
            @foreach ($movies as $movie )
                <div>
                    <h2>{{ $movie->movie_title}}</h2>
                    <p>{{ $movie->description}}</p>
                    <p>{{ $movie->release_date}}</p>
                    <img src="{{ $movie->movie_image }}" alt="{{ $movie->movie_title}}" title="{{ $movie->movie_title}}">
                </div>
            @endforeach
        </div>
    </body>
</html>
