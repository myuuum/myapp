<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿</title>
    </head>
    <body>
        <h1>今日の記録</h1>
        <form action="/post" method="POST">
            @csrf
            <div class="comment">
                <h2>内容</h2>
                <textarea name="post[body_comment]" placeholder="今日の内容"></textarea>
            </div>
            <div class="time">
                <h2>記録</h2>
                <input type="text" name="post[body_time]" placeholder="記録"/>
            </div>
            <div class="date">
                <input type="date" name="post[date]">
            </div>
            <input type="hidden" name="post[target_id]" value="{{$target_id}}">
            <input type="hidden" name="post[user_id]" value="{{$target_id}}">
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>