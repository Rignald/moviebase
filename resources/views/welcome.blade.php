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
          <ul>
            @foreach ($movies as $movie )
              <li>{{ $movie->movie_title}}</li>
              <li>{{ $movie->description}}</li>
              <li>{{ $movie->genre}}</li>
              <li>{{ $movie->release_date}}</li>
              <li>{{ $movie->image}}</li>
            @endforeach
          </ul>
    </body>
</html>
