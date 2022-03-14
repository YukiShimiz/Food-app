@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Blog Index</title>
</head>
<body>
    <h2>ブログ一覧</h2>
    @foreach($blogs as $blog)
        <p>{{$blog->title}}</p>
        <p>{{$blog->user->name}}</p>
        <p>更新日時：{{$blog->updated_at}}</p>
        <a href="/food/blog/show/{{$blog->id}}">詳細</a><br>
        <a href="/food/blog/edit/{{$blog->id}}">編集・削除</a><br>
    @endforeach
    <div class='paginate'>
        {{$blogs->links()}}
    </div>
    <a href="/food/top">トップ画面へ戻る</a>
</body>
@endsection