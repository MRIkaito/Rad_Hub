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
            <div id="form_area" class='title'>
                <!--タイトル-->
                <input type="text" name="post[title]" placeholder="タイトル">
                
                <!--カテゴリ-->
                <select name="post[category_id]" size='1'>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">カテゴリ：{{ $category->name }}</option>   
                    @endforeach
                </select>
                
                <!--本文-->
                <br><textarea name="post[contents]" placeholder="本文" rows="10" cols="100"></textarea>
            
                <!--画像・入力フォーム-->
                <div class="image"><input name="image" type="file"></div>
                
                <!--作成者情報-->
                <input type="hidden" name="post[user_id]" value="{{ Auth::user()->id }}">
            </div>
            
            <input id="form" type="button" value="フォーム追加" >
            <br><button type="submit" value="画像・記事アップロード">送信</button>
            <p>[<a href="/">戻る</a>]</p>
        </form>
        
        <!--<script>-->
        <!--     let i=2;-->
        <!--     function addForm() {-->
        <!--       //input_dataを定義.input要素を作成して，それをinput_dataに代入した-->
        <!--       let textarea_data_contents = document.createElement('textarea');-->
        <!--       let input_data_image = document.createElement('input');-->
            
        <!--       //input_dataをtype="text"とした-->
        <!--       textarea_data_contents.type = "text";-->
        <!--       textarea_data_contents.name = "post[contents]"; -->
        <!--       input_data_image.type = "file";-->
        <!--       input_data_image.name = "image"; -->
            
        <!--       //input_dataのidを，inputform_i番とする-->
        <!--       textarea_data_contents.id = 'textareaform_contents_'+i;-->
        <!--       input_data_image.id = "inputform_image_"+i;-->
            
        <!--       //input_dataのplaceholderは"フォーム-i"とする．-->
        <!--       textarea_data_contents.placeholder = '本文-'+i;-->
               
        <!--       //parentに,'id="form_area"'の中にあるコードを取得し，それをparentへ代入-->
        <!--       let parent = document.getElementById('form_area');-->
            
        <!--       //上のコードで定義したparentに，input_data_title，input_data_contentsのコードを加える-->
        <!--       parent.appendChild(textarea_data_contents);-->
        <!--       parent.appendChild(input_data_image);-->
            
        <!--       i ++;-->
        <!--       }-->
        <!-- </script>-->
        <script src={{ asset('js/add_form.js') }} defer></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
@endsection
</html>