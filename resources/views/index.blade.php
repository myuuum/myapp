<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>一覧</h1>
        <div class='targets'>
            @foreach ($targets as $target)
                <div class='target'>
                    <h2><a href='/user'>{{ $target->user->name}}</a>
                    <a href='/post'>{{ $target->target }}</a></h2>
                    <div class='body'>
                        <p>期日　{{ $target->fixed_date }}</p>
                        <p>{{ $target->achievement }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>