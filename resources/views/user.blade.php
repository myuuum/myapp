<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>user</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>一覧</h1>
        <div class='targets'>
            @foreach ($targets as $target)
                <div class='target'>
                    <a href='/post'><h2 class='title'>{{ $target->user->name}}</a> {{ $target->target }}</h2>
                    <p class='body'>{{ $target->fixed_date }}</p>
                    <p class='body'>{{ $target->achievement }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>