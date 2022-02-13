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
        <form action='/posts' method = "POST">
            <div>   <!--左寄せとなっているが，後々真ん中寄せにする-->
            <input type="text" name="post[title]" placeholder="タイトル">
            </div>
            
            <div>
            <textarea type="text" name="post[contents]" placeholder="本文をココから書き始める"></textarea>
            </div>
            <button type="submit">送信</button>
        </form>
    </body>
</html>