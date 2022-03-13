<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Radiation_Hub</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
@extends('layouts.app')　　　
@section('content')
    <body>
        <h1>放射線技師Hub</h1>
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            
            <p class='body'>{{ $post->contents }}</p>
            
            <p class='image'>
                @foreach($images as $image)
                    @if($image->post_id == $post->id)
                        <img src = "{{ $image->path }}">
                    @endif
                @endforeach
            </p>
            
            <p>[<a href="/posts/{{$post->id}}/edit">編集</a>]</p>
            
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
            
            <p><a href=users/{{ $post->user_id }}>作成者：{{ $post->user->name }}</a></p>
            
            <p>[<a href="/">戻る</a>]</p>
            
            <a href="">カテゴリ：{{ $post->category->name }}</a>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
@endsection
</html>