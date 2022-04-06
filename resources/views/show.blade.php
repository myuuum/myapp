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
            <h1>{{$post->target->user->name}}</h1>
            <h2><p>{{$post->target->target}}</p></h2>
            <div class="title">
                @foreach($target->posts as $post)
                    <p>{{$post->date}}</p>
                    <p>{{$post->body_comment}}</p>
                    <p>{{$post->body_time}}</p>
                    <p>---------------------------</p>
                @endforeach
            </div>
        </div>
        @endforeach
        <div class="footer">
            [<a href='/target/{{$target->id}}/create'>create</a>]
            <a href="/">戻る</a>
        </div>
    </body>
</html>
@endsection