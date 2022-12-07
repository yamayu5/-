<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>予約サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レビュー</h1>
        <form action="/" method="POST">
            @csrf
            <div class="user_name">
                {{ Auth::user()->name }}
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="review[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="保存"/>
            <div class="review">
                <h3>評価</h3>
            <select name="select2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </div>
    </body>
</html>