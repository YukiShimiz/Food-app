@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Blog Detail</title>
</head>
<body>
    <h2>{{$blog->title}}</h2>
    <a>ユーザー：{{$blog->user->name}}</a><br>
    <a>メニュー：{{$blog->menu->title}}</a><br>
    <a>更新日時：{{$blog->updated_at}}</a>
    <p>{{$blog->body}}</p>
    <a href="/food/blog/index/{{Auth::User()->id}}">戻る</a><br>
    <a href="/food/top">トップ画面へ戻る</a>
</body>
@endsection