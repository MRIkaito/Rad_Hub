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
        <h1>記事投稿画面</h1>
        
        <form action='/posts' method="post" enctype="multipart/form-data">
            @csrf
            <div class='title'>
                <!--タイトル-->
                <input type="text" name="post[title]" placeholder="タイトル" required="required">
                
                <!--カテゴリ-->
                <select name="post[category_id]" size='1'>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">カテゴリ：{{ $category->name }}</option>   
                    @endforeach
                </select>
                
                <!--本文-->
                <br><textarea name="post[contents]" placeholder="本文" rows="10" cols="100" required="required"></textarea>
            
                <!--画像・入力フォーム-->
                <div class="image" id="form_area"><input type="file" name="image[0]" accept=".jpg,.jpeg,.JPG,.JPEG,.png,.gif"><拡張子「.jpg」「.jpeg」「.png」「.gif」が投稿可></div>
                
                <!--作成者情報-->
                <input type="hidden" name="post[user_id]" value="{{ Auth::user()->id }}">
            </div>
            
            <input id="form" type="button" value="画像ファイルを追加" >
            <br><button type="submit" value="画像・記事アップロード">送信</button>
            <p>[<a href="/">戻る</a>]</p>
        </form>
        
        <script src={{ asset('js/add_form.js') }} defer></script>
    </body>
@endsection
</html>