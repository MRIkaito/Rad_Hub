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
        <div class = "d-flex flex-row">
            <p><a href = '/../posts/create' class="btn btn-primary">記事を作成</a></p>
            <div class="back"><a href = '/' class="btn btn-dark">トップページに戻る</a></div>
        </div>
        @foreach($posts as $post)
        <div class="mb-5">
            <h2 class='title'><a href='/posts/{{ $post->id }}'><u>{{ $post->title }}</u></a></h2>
            <p class='body'>{{ Str::limit($post->contents,20,'...') }}</p>
             @foreach($images as $image)
                @if($image->post_id == $post->id)
                        <img  src = "{{ $image->path }}">
                @endif
            @endforeach
            <p class='updated_at'>更新日：{{$post->updated_at}}</p>
            
            <div class = "d-flex flex-row">
                <p class='category'>カテゴリー：{{ $post->category->name }}　</p>
                @foreach($users as $user)
                    @if($post->user_id == $user->id)
                        <p><a href='/../users/{{ $post->user_id }}'>作成者：{{$user->name}}</a></p>
                    @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </body>
@endsection
</html>
