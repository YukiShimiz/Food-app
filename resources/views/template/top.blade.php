@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Template Top Page</title>
</head>
<body>
    <a href="/food/management/template/create/{{Auth::User()->id}}">テンプレートを追加する</a><br>
    <a href="/food/management/template/index/{{Auth::User()->id}}">テンプレート一覧</a><br>
    <a href="/food/management">戻る</a>
</body>
@endsection