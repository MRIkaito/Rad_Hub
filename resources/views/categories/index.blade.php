<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Radiation_Hub</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
@extends('layouts.app')　
@section('content')
    <body>
        <h1>放射線技師Hub　-カテゴリ別表示-</h1>
        <p>[<a href = 'posts/create'>作成</a>]</p>
        <div class="back">[<a href = '/'>ホームに戻る</a>]</div>
        @foreach($posts as $post)
        <div class='posts'>
            <h2 class='title'><a href='/posts/{{ $post->id }}'>{{ $post->title }}</a></h2>
            <p class='body'>{{ $post->contents }}</p>
            <p class='updated_at'>更新日：{{$post->updated_at}}</p>
            <p class='category'>カテゴリー：{{ $post->category->name }}</p>
            @foreach($users as $user)
                @if($post->user_id == $user->id)
                    <p><a href=users/{{ $post->user_id }}>作成者：{{$user->name}}</a></p>//URLがおかしい？
                @endif
            @endforeach
        </div>
        @endforeach
    </body>
@endsection
</html>
