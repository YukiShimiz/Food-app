@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Blog Edit</title>
</head>
<body>
    <h2>ブログ編集</h2>
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
        <p>タイトル</p>
            <input type="textarea" name="blog[title]" value="{{old('blog.title',$blog->title)}}"/><br>
        <p>本文</p>
            <textarea name="blog[body]">{{old('blog.body',$blog->body)}}</textarea><br>
        <input type="hidden" name="blog[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="blog[menu_id]" value="{{$blog->menu->id}}"/>
        <input type="button" onclick="return editpost(this)" value="保存"/>
    </form>
    <form action="/food/blog/delete/{{$blog->id}}" method="post" id="blog_delete">
            @csrf
            @method('delete')
            <input type="button" onclick="return deletepost(this);" value="削除"></input>
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
    <a href="/food/blog/index/{{Auth::User()->id}}">戻る</a><br>
    <a href="/food/top">トップ画面へ戻る</a>
</body>
@endsection
