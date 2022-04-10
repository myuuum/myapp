@extends('layouts.app')　　　　　　　　　　　　　　　　　
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>index</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        マイユーザ
        <a href="/user/{{Auth::user()->id}}">{{Auth::user()->name}}</a>
        <div align="right" class="button">
            <a href='/target/{{4}}/create'><button>投稿</button></a>
            
        </div>

        <h1>一覧</h1>
        {{Auth::user()}}
        <div class='targets'>
            @foreach ($targets as $target)
                <div class='target'>
                    <h2><a href="/user/{{ $target->id }}">{{ $target->user->name}}</a>
                    <a href="/target/{{ $target->id }}">{{ $target->target}}</a></h2>
                    <div class='body'>
                        <p>期日　{{ $target->fixed_date }}</p>
                        <p>{{ $target->achievement }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
<style>
.button{
    border: 1px solid #999;
    padding: 10px;
    background: #fff9cc;
    margin-top:10px;
}
@endsection