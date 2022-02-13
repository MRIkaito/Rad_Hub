<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Radiation_Hub</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>放射線技師Hub</h1>
        <div class='post'>
            <h2 class='title'>{{ $post->id }}</h2>
            <p class='body'>{{ $post->contents }}</p>
        </div>
    </body>
</html>
