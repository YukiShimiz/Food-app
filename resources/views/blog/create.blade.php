@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Blog create</title>
</head>
<body>
    <h2>ブログ投稿</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/food/blog/post" method="post">
    @csrf
        <p>タイトル</p>
            <input type="textarea" name="blog[title]" value="{{old('blog.title')}}"/><br>
        <p>本文</p>
            <textarea name="blog[body]" value="{{old('blog.body')}}"></textarea><br>
        <input type="hidden" name="blog[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="blog[menu_id]" value="{{$id}}"/>
        <input type="submit" value="投稿"/>
    </form>
    <a href="/food/top">トップ画面へ戻る</a>
</body>
@endsection