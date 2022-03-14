@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Menu Search Result</title>
</head>
<body>
    <h2>献立検索結果</h2>
    @foreach($menu as $i)
        <p>{{$i->title}}</p>
        <a href="/food/menu/detail/template/{{$i->id}}">詳細</a><br>
    @endforeach
    
    <a href="/food/menu/search/template/{{Auth::User()->id}}">戻る</a>
</body>
@endsection