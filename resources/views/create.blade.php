<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Radiation_Hub</title>
         <!--Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>記事投稿画面</h1>
        
        <form action='/posts' method = "post" enctype="multipart/form-data">
            @csrf
            <div>
                <class='title'><input type="text" name="post[title]" placeholder="タイトル"></div>
            </div>
            <div>
                <class='content'><textarea type="text" name="post[contents]" placeholder="本文をココから書き始める" rows="10" cols="100"></textarea></div>
            </div>
            
            <!--画像・入力フォーム-->
            <div class="image"><input name="image" type="file"></div>
            
            <div class="post_category">
                <select name="post[category_id]" size='1'>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>   
                    @endforeach
                </select>
                
                <!--🔽第２カテゴリ用に残しておく-->
                <!--<select>-->
                <!--    @foreach($categories as $category)-->
                <!--        <div>第２カテゴリ：<option value="{{ $category->id }}">{{ $category->name}}</option></div>-->
                <!--    @endforeach-->
                <!--</select>-->
            </div>
            <button type="submit" value="画像・記事アップロード">送信</button>
            <p>[<a href="/">戻る</a>]</p>
        </form>
    </body>
</html>