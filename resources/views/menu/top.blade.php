@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Menu Top</title>
</head>
<body>
    <a href="/food/menu/search/management/{{Auth::User()->id}}">現在登録されている食材で検索</a><br>
    <a href="/food/menu/search/template/{{Auth::User()->id}}">テンプレートを用いて検索</a><br>
    <a href="/food/top">戻る</a>
</body>
@endsection