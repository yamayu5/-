<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>予約サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href="/reservation">予約</a>
        <a href="/login">ログイン</a>
        <h1>マッサージ</h1>
        <h2 class='title'>
        </h2>
        <div class='posts'>
            @foreach ($users as $user)
            <div class='post'>
                <h2 class='title'>クチコミ</h2>
            </div>
            @endforeach
        </div>
    </body>
</html>