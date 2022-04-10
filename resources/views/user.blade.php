@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>show</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @foreach ($target->posts->unique('user_id') as $post)
        <div class="user">
            <h1>プロフィール　{{$post->target->user->name}}</h1>
            <div class="title">
                <h2>
                <p>{{$post->target->user->age}}</p>
                <p>{{$post->target->user->sex}}</p>
                <p>---------------------------</p>
                @foreach ($target->posts->unique('user_id') as $post)
                    @if ($post->target->target == 'NULL'))
                        <p>目標が設定されていません;</p>
                    @else
                        <p>目標　{{$post->target->target}}</p>
                    @endif
                @endforeach
                </h2>
            </div>
        </div>
        @endforeach
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
@endsection