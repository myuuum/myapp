<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>post</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @foreach ($posts as $post)
            <h1>{{$post->user->name}}</h1>
            <div class='target'>
                <a href='/user'><h2 class='title'>{{ $post->target->target }}</h2></a>
                @foreach ($posts as $post)
                    <div class='body'>
                        <p>{{ $post->date}}</p>
                        <p>{{ $post->body_comment}}</p>
                        <p>{{ $post->body_time}}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </body>
</html>