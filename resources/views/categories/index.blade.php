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
        <p>[<a href = 'posts/create'>作成</a>]</p>
        <div class="back">[<a href = '/'>ホームに戻る</a>]</div>
        @foreach($posts as $post)
        <div class='posts'>
            <h2 class='title'><a href='/posts/{{ $post->id }}'>{{ $post->title }}</a></h2>
            <p class='body'>{{ $post->contents }}</p>
            <p class='created_at'>作成日：{{$post->created_at}}</p>
            <p class='updated_at'>更新日：{{$post->updated_at}}</p>
            <p class='category'><a href=categories/{{ $post->category->id }}>カテゴリー：{{ $post->category->name }}</a></p>
            <p class='updated_at'></p>
        </div>
        @endforeach
    </body>
</html>
