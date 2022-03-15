@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Template Index</title>
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
        <a type="button" class="btn btn-link mt-3" href="/food/menu/search/top">戻る</a>
        <h2 class="mt-3 mb-3">テンプレート一覧</h2>
        @foreach($templates as $template)
            <div class="card" style="width: 20rem;">
              <div class="card-body">
                <h4 class="card-title">・{{$template->title}}</h4>
                <p class="card-text">{{$template->body}}</p>
                <a>更新日時：{{$template->updated_at}}</a><br>
                <a href="/food/menu/template/detail/{{$template->id}}">詳細</a><br>
                <a href="/food/menu/search/template/id/{{$template->id}}">このテンプレートを基に検索</a><br>
              </div>
            </div>
        @endforeach
        <div class='paginate'>
            {{$templates->links()}}
        </div>
    </div>
</body>
@endsection