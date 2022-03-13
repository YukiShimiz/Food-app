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
    @foreach($results as $result)
        <p>{{$menu->find($result)->title}}</p>
        <a href="/food/menu/detail/{{$result}}">詳細</a><br>
    @endforeach
    <div class='paginate'>
        {{$menu->links()}}
    </div>
    <a href="/food/menu/search/top">戻る</a>
</body>
@endsection