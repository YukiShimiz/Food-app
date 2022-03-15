@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Blog Index</title>
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
        <h2>ブログ一覧</h2>
        @foreach($blogs as $blog)
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title">・{{$blog->title}}</h4>
                    <p class="card-text">{{$blog->menu->title}}</p>
                    <a>{{$blog->user->name}}</a><br>
                    <a>投稿日時：{{$blog->created_at}}</a><br>
                    <a href="/food/blog/show/{{$blog->id}}">詳細</a><br>
                    <a href="/food/blog/edit/{{$blog->id}}">編集・削除</a><br>
                </div>
            </div>
        @endforeach
        <div class='paginate'>
            {{$blogs->links()}}
        </div>
    </div>
</body>
@endsection