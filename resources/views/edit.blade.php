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
        <h1>編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" value="{{ $post->title }}">
            </div>
            <div class="content">
                <h2>本文</h2>
                <textarea type='text' name="post[contents]" rows="8" cols="80">{{ $post->contents }}</textarea>
            </div>
            
            <div class="images">
                @foreach($images as $image)
                    @if($image->post_id == $post->id)
                        <img src = "{{ $image->path }}">
                    @endif
                @endforeach
            </div>
            
            <div class = "image_edit">
                画像を追加する場合▶<input name="image" type="file">
            </div>    
            <a href="">カテゴリ：{{ $post->category->name }}</a>
            <div>
                <input type="submit" value="保存">
            </div>
        </form>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
@endsection
</html>