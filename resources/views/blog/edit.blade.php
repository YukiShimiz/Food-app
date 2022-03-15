@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Blog Edit</title>
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
    <div class="mt-e ml-3">
        <a type="button" class="btn btn-link mt-3 mb-3" href="/food/blog/index/{{Auth::User()->id}}">戻る</a><br>
        <h2>ブログ編集</h2>
        <form action="/food/blog/delete/{{$blog->id}}" method="post" id="blog_delete">
                @csrf
                @method('delete')
                <input type="button" class="btn btn-outline-primary mt-3" onclick="return deletepost(this);" value="削除"></input>
        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/food/blog/edit/{{$blog->id}}" method="post" id="blog_edit">
        @csrf
            <input type="button" class="btn btn-outline-primary mt-3 mb-3" onclick="return editpost(this)" value="保存"/>
            <div class="form-group">
                <p>タイトル</p>
                    <input type="textarea" class="form-control" name="blog[title]" value="{{old('blog.title',$blog->title)}}"/><br>
                <p>本文</p>
                    <textarea  class="form-control" name="blog[body]">{{old('blog.body',$blog->body)}}</textarea><br>
                <input type="hidden" name="blog[user_id]" value="{{Auth::User()->id}}"/>
                <input type="hidden" name="blog[menu_id]" value="{{$blog->menu->id}}"/>
            </div>
        </form>
        <script>
                function editpost(e){
                    
                const choice=window.confirm("編集を保存してよろしいですか？");
                if(choice){
                    document.getElementById('blog_edit').submit();
                }
                }
                function deletepost(e){
                    
                const choice=window.confirm("テンプレートを削除してよろしいですか？");
                if(choice){
                    document.getElementById('blog_delete').submit();
                }
                }
        </script>
    </div>
</body>
@endsection
