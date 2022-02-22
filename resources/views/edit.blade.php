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
            <h2 class='title'>{{ $post->title }}</h2>
            <!--ここにカテゴリを入れる-->
            <p class='body'>{{ $post->contents }}</p>
            <p>[<a href="/posts/{$post}/edit">編集</a>]</p>
            <p>[<a href="/">戻る</a>]</p>
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        </div>
    </body>
</html>