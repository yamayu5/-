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
        <div class='posts'>
            @foreach ($reviews as $review)
            <div class='post'>
                <h2 class='title'>クチコミ</h2>
                <p class='body'>{{ $review->body }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>