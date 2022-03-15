@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Menu Search Result</title>
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
    <div class="ml-3 mt-3">
        <h2>レシピ検索結果</h2>
        <a type="button" class="btn btn-link mt-3 mb-3" href="/food/menu/search/template/{{Auth::User()->id}}">戻る</a>
        @foreach($menu as $i)
        <div class="card" style="width: 20rem;">
              <div class="card-body">
                <h4 class="card-title">・{{$i->title}}</h4>
                <a href="/food/menu/detail/template/{{$i->id}}">詳細</a><br>
              </div>
        </div>
        @endforeach
    </div>
</body>
@endsection