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
        <a href="/food/management/template/{{$template->id}}">編集・削除</a><br>
    @endforeach
    <div class='paginate'>
        {{$templates->links()}}
    </div>
    <a href="/food/management/template">戻る</a>
</body>
@endsection