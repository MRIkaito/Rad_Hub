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
        
        <!--入力フォーム-->
        <form action='/image/posts' method = "POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input id="image" name="image" type="file">
            </div>    
            <button type="submit">送信</button>
            <p>[<a href="/">戻る</a>]</p>
        </form>
    </body>
</html>