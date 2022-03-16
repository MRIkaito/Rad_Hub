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
        <h1 >放射線技師Hub</h1>
        <div class='post'>
            <h2><u>{{ $post->title }}</u></h2>
            
            <p class="text-center">
                @foreach($images as $image)
                    @if($image->post_id == $post->id)
                        <img  src = "{{ $image->path }}">
                    @endif
                @endforeach
            </p>
            
            <p class='body' style="white-space:pre-wrap;">{{ $post->contents }}</p>
            
            <div class = "d-flex flex-row">
                <a href="/../categories/{{$post->category_id}}">カテゴリ：{{ $post->category->name }}　</a>
                <p><a href='/../users/{{ $post->user_id }}'>作成者：{{ $post->user->name }}</a></p>
            </div>
            
            <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" >削除</button>
            </form>
            
            <!--編集は，作成者のみ行える-->
            @if(Auth::user()->name == $post->user->name)
                <p><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">編集</a></p>
            @endif
            
            <p><a href="/" class="btn btn-dark">戻る</a></p>
        </div>
        <!--<script src="{{ asset('js/app.js') }}"></script>-->
    </body>
@endsection
</html>