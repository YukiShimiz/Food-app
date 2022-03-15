@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Template stored</title>
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
        <a>{{Auth::User()->name}}様</a><br>
        <a>正常に更新されました</a><br>
    </div>
</body>
@endsection