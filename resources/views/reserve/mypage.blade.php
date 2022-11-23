<x-app-layout>
    <body>
        <a href="/reservation">予約</a>
        <h1>My Page</h1>
        <div class='posts'>
            @foreach ($courses as $course)
            <div class='post'>
                <h2 class='title'>Title</h2>
                <p class='body'>{{ $course->body }}</p>
            </div>
            @endforeach
        </div>
    </body>
</x-app-layout>