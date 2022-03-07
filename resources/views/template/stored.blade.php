@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Template stored</title>
</head>
<body>
    <a>{{Auth::User()->name}}様</a><br>
    <a>正常に更新されました</a><br>
    <a href="/food/top">トップ画面に戻る</a>
</body>
@endsection