@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
    <!-- Bootstrap Javascript(jQuery含む) -->
    <script src="https:/code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https:/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https:/stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Top Page</title>
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
    <div class="card" style="width: 40rem;">
          <div class="card-body">
            <h4 class="card-title">・食材管理</h4>
            <p class="card-text">{{Auth::User()->name}}さんが保有している食材を記録しましょう。</p>
            <p><strong>マネジメントの管理</strong>：</p>
            <a>マネジメントは、現在の食材の数量を管理することを表します。現在保有している食材の個数を入力してください。</a>
            <p><strong>テンプレートの管理</strong>：</p>
            <a>テンプレートでは、{{Auth::User()->name}}さんがよく保有する食材の数量をパターン化して、記録しておくとよいでしょう。</a>
          </div>
    </div>
    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <h4 class="card-title">・レシピ検索</h4>
        <p class="card-text">食材管理において記録した食材をもとに、作成可能なレシピを提案します。</p>
      </div>
    </div>
    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <h4 class="card-title">・レシピ投稿</h4>
        <p class="card-text">あなたの考える献立が投稿されると、レシピ検索に登場するようになります。</p>
      </div>
    </div>
    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <h4 class="card-title">・ブログ</h4>
        <p class="card-text">投稿したブログの一覧から、{{Auth::User()->name}}さんがこれまでに作成したレシピやその感想を確認しましょう。ブログは、レシピ検索後に表示されるボタンから投稿することができます。</p>
      </div>
    </div>
@endsection