@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Blog create</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" style="color:white">食材管理アプリ</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/food/top">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/food/management">食材管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/food/menu/search/top">レシピ検索</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/food/menu/post">レシピ投稿</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/food/blog/index/{{Auth::User()->id}}">ブログ</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mt-3 ml-3">
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
        <div class="form-group">
            <p>タイトル</p>
                <input type="textarea" class="form-control" name="blog[title]" value="{{old('blog.title')}}"/><br>
            <p>本文</p>
                <textarea name="blog[body]" class="form-control" value="{{old('blog.body')}}"></textarea><br>
            <input type="hidden" name="blog[user_id]" value="{{Auth::User()->id}}"/>
            <input type="hidden" name="blog[menu_id]" value="{{$id}}"/>
            <input type="submit" class="btn btn-outline-primary mt-3 mb-3" value="投稿"/>
        </div>
        </form>
    </div>
</body>
@endsection