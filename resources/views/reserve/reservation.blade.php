<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>予約サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>reservetion</h1>
        <div class='posts'>
            @foreach ($reserves as $reserve)
            <div class='post'>
                <h2 class='title'>Title</h2>
                <p class='body'>{{ $course->body }}</p>
            </div>
            @endforeach
        </div>
        <form action="reservation_calender.php" method="post">
            お名前
            <div><input type="text" name="name" placeholder="山田太郎"></div>
            電話番号
            <div><input type="tel" name="number" placeholder="08012349876"></div>
            人数
            <div><input name="member"></div>
            日付
            <div>
            <input type="date" name="day" list="daylist" min="">
            </div>
            コース
            <div>
            <select name="select">
            </select>
            </div>
            <div class="submit">
            <input type="submit" value="送信">
            </div>
            <div class="reset">
            <input type="reset" value="リセット">
            </div>
        </form>
    </body>
</html>