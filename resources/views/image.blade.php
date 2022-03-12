<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Radiation_Hub</title>
         <!--Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
@extends('layouts.app')　　　
@section('content')
    <body>
        <h1>記事投稿画面</h1>
        
        <form action='/posts' method = "post" enctype="multipart/form-data">
        <form action="/image">
            @csrf
        
        <!--記事投稿-->
            <div>
                <input type="text" name="post[title]" placeholder="タイトル">
            </div>
            <div>
                <textarea type="text" name="post[contents]" placeholder="本文をココから書き始める" rows="10" cols="100"></textarea>
            </div>
            
        <!--入力フォーム-->
            <div>
            <input name="title" type="text" placeholder="画像タイトル">
            <br>
            <input name="image" type="file">
            <br><br>
            <input type="submit" value="アップロード">
            </div>
            <p>[<a href="/">戻る</a>]</p>
        </form>
    </body>
@endsection
</html>