@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Template Index</title>
</head>
<body>
    <h2>テンプレート一覧</h2>
    @foreach($templates as $template)
        <p>{{$template->title}}</p>
        <a href="/food/menu/template/detail/{{$template->id}}">詳細</a><br>
        <a href="/food/menu/search/template/id/{{$template->id}}">このテンプレートを基に検索</a><br>
    @endforeach
    <div class='paginate'>
        {{$templates->links()}}
    </div>
    <a href="/food/menu/search/top">戻る</a>
</body>
@endsection