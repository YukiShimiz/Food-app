@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Template Create</title>
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
    <div class="ml-3 mt-3">
    <h3>テンプレート登録</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/food/management/template/create/{{Auth::User()->id}}" method="POST">
        @csrf
    <input type="submit" class="btn btn-outline-primary mt-3 mb-3" value="保存"/>
    <div class="form-group">
        <details>
            <summary>タイトル・説明</summary>
                <p>タイトル</p>
                <input type="textarea" class="form-control" name="template_title_body[title]" value="{{old('template_title_body.title')}}"/><br>
                <p>説明</p>
                <input type="textarea" class="form-control" name="template_title_body[body]" value="{{old('template_title_body.body')}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>炭水化物（パン類・穀類・麺類）</summary>
                <h2>パン類</h2>
                    <a>食パン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[plain_bread]" value="{{old('template_carbohydrates_bread.plain_bread',
                    "0")}}"/><br>
                    <a>コッペパン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[koppe_bread]" value="{{old('template_carbohydrates_bread.koppe_bread',
                    "0")}}"/><br>
                    <a>クロワッサン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[croissant]" value="{{old('template_carbohydrates_bread.croissant',
                    "0")}}"/><br>
                    <a>ロールパン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[bread_roll]" value="{{old('template_carbohydrates_bread.bread_roll',
                    "0")}}"/><br>
                    <a>ベーグル</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[bagel]" value="{{old('template_carbohydrates_bread.bagel',
                    "0")}}"/><br>
                    <a>デニッシュ</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[danish]" value="{{old('template_carbohydrates_bread.danish',
                    "0")}}"/><br>
                    <a>スコーン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[scone]" value="{{old('template_carbohydrates_bread.scone',
                    "0")}}"/><br>
                    <a>バゲット</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[baguette]" value="{{old('template_carbohydrates_bread.baguette',
                    "0")}}"/><br>
                    <a>バタール</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[batal]" value="{{old('template_carbohydrates_bread.batal',
                    "0")}}"/><br>
                    <a>ナン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[naan]" value="{{old('template_carbohydrates_bread.naan',
                    "0")}}"/><br>
                    <a>グリッシーニ</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[grissini]" value="{{old('template_carbohydrates_bread.grissini',
                    "0")}}"/><br>
                    <a>マフィン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_bread[muffin]" value="{{old('template_carbohydrates_bread.muffin',
                    "0")}}"/><br>
                <h2>穀類</h2>
                    <a>米</a>
                    <input type="number" class="form-control" name="template_carbohydrates_cereals[rice]" value="{{old('template_carbohydrates_cereals.rice',
                    "0")}}"/><br>
                    <a>玄米</a>
                    <input type="number" class="form-control" name="template_carbohydrates_cereals[brown_rice]" value="{{old('template_carbohydrates_cereals.brown_rice',
                    "0")}}"/><br>
                    <a>雑穀・麦</a>
                    <input type="number" class="form-control" name="template_carbohydrates_cereals[millet]" value="{{old('template_carbohydrates_cereals.millet',
                    "0")}}"/><br>
                    <a>もち米</a>
                    <input type="number" class="form-control" name="template_carbohydrates_cereals[sticky_rice]" value="{{old('template_carbohydrates_cereals.sticky_rice',
                    "0")}}"/><br>
                    <a>餅</a>
                    <input type="number" class="form-control" name="template_carbohydrates_cereals[rice_cake]" value="{{old('template_carbohydrates_cereals.rice_cake',
                    "0")}}"/><br>
                    <a>餅巾着</a>
                    <input type="number" class="form-control" name="template_carbohydrates_cereals[mochikinchaku]" value="{{old('template_carbohydrates_cereals.mochikinchaku',
                    "0")}}"/><br>
                    <a>シリアル</a>
                    <input type="number" class="form-control" name="template_carbohydrates_cereals[cereal]" value="{{old('template_carbohydrates_cereals.cereal',
                    "0")}}"/><br>
                <h2>麺類</h2>
                    <a>うどん</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[udon]" value="{{old('template_carbohydrates_noodles.udon',
                    "0")}}"/><br>
                    <a>そうめん</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[somen]" value="{{old('template_carbohydrates_noodles.somen',
                    "0")}}"/><br>
                    <a>そば</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[soba]" value="{{old('template_carbohydrates_noodles.soba',
                    "0")}}"/><br>
                    <a>パスタ</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[pasta]" value="{{old('template_carbohydrates_noodles.pasta',
                    "0")}}"/><br>
                    <a>ラーメン</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[ramen]" value="{{old('template_carbohydrates_noodles.ramen',
                    "0")}}"/><br>
                    <a>焼きそば</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[fried_noodle]" value="{{old('template_carbohydrates_noodles.fried_noodle',
                    "0")}}"/><br>
                    <a>つけ麺</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[tsukemen]" value="{{old('template_carbohydrates_noodles.tsukemen',
                    "0")}}"/><br>
                    <a>冷や麦</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[hiyamugi]" value="{{old('template_carbohydrates_noodles.hiyamugi',
                    "0")}}"/><br>
                    <a>冷麺</a>
                    <input type="number" class="form-control" name="template_carbohydrates_noodles[cold_noodle]" value="{{old('template_carbohydrates_noodles.cold_noodle',
                    "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>野菜類</summary>
                    <a>アスパラガス</a>
                    <input type="number" class="form-control" name="template_vegetable[asparagus]" value="{{old('template_vegetable.asparagus',
                    "0")}}"/><br>
                    <a>かぼちゃ</a>
                    <input type="number" class="form-control" name="template_vegetable[pumpkin]" value="{{old('template_vegetable.pumpkin',
                    "0")}}"/><br>
                    <a>キャベツ</a>
                    <input type="number" class="form-control" name="template_vegetable[cabbage]" value="{{old('template_vegetable.cabbage',
                    "0")}}"/><br>
                    <a>ごぼう</a>
                    <input type="number" class="form-control" name="template_vegetable[burdock]" value="{{old('template_vegetable.burdock',
                    "0")}}"/><br>
                    <a>サツマイモ</a>
                    <input type="number" class="form-control" name="template_vegetable[satsumaimo]" value="{{old('template_vegetable.satsumaimo',
                    "0")}}"/><br>
                    <a>山菜</a>
                    <input type="number" class="form-control" name="template_vegetable[sansai]" value="{{old('template_vegetable.sansai',
                    "0")}}"/><br>
                    <a>じゃがいも</a>
                    <input type="number" class="form-control" name="template_vegetable[potato]" value="{{old('template_vegetable.potato',
                    "0")}}"/><br>
                    <a>春菊</a>
                    <input type="number" class="form-control" name="template_vegetable[crowndaisy]" value="{{old('template_vegetable.crowndaisy',
                    "0")}}"/><br>
                    <a>しょうが</a>
                    <input type="number" class="form-control" name="template_vegetable[garlic]" value="{{old('template_vegetable.garlic',
                    "0")}}"/><br>
                    <a>セロリ</a>
                    <input type="number" class="form-control" name="template_vegetable[celery]" value="{{old('template_vegetable.celery',
                    "0")}}"/><br>
                    <a>大根</a>
                    <input type="number" class="form-control" name="template_vegetable[daikon]" value="{{old('template_vegetable.daikon',
                    "0")}}"/><br>
                    <a>たけのこ</a>
                    <input type="number" class="form-control" name="template_vegetable[banboo_shoots]" value="{{old('template_vegetable.banboo_shoots',
                    "0")}}"/><br>
                    <a>たまねぎ</a>
                    <input type="number" class="form-control" name="template_vegetable[onion]" value="{{old('template_vegetable.onion',
                    "0")}}"/><br>
                    <a>豆苗</a>
                    <input type="number" class="form-control" name="template_vegetable[been_seedlings]" value="{{old('template_vegetable.been_seedlings',
                    "0")}}"/><br>
                    <a>とうもろこし</a>
                    <input type="number" class="form-control" name="template_vegetable[corn]" value="{{old('template_vegetable.corn',
                    "0")}}"/><br>
                    <a>トマト</a>
                    <input type="number" class="form-control" name="template_vegetable[tomato]" value="{{old('template_vegetable.tomato',
                    "0")}}"/><br>
                    <a>なす</a>
                    <input type="number" class="form-control" name="template_vegetable[eggplant]" value="{{old('template_vegetable.eggplant',
                    "0")}}"/><br>
                    <a>にんじん</a>
                    <input type="number" class="form-control" name="template_vegetable[carrot]" value="{{old('template_vegetable.carrot',
                    "0")}}"/><br>
                    <a>ネギ</a>
                    <input type="number" class="form-control" name="template_vegetable[green_onion]" value="{{old('template_vegetable.green_onion',
                    "0")}}"/><br>
                    <a>白菜</a>
                    <input type="number" class="form-control" name="template_vegetable[chinese_cabbage]" value="{{old('template_vegetable.chinese_cabbage',
                    "0")}}"/><br>
                    <a>ピーマン</a>
                    <input type="number" class="form-control" name="template_vegetable[green_pepper]" value="{{old('template_vegetable.green_pepper',
                    "0")}}"/><br>
                    <a>ブロッコリー</a>
                    <input type="number" class="form-control" name="template_vegetable[broccoli]" value="{{old('template_vegetable.broccoli',
                    "0")}}"/><br>
                    <a>らっきょう</a>
                    <input type="number" class="form-control" name="template_vegetable[rakkyo]" value="{{old('template_vegetable.rakkyo',
                    "0")}}"/><br>
                    <a>レタス</a>
                    <input type="number" class="form-control" name="template_vegetable[lettuce]" value="{{old('template_vegetable.lettuce',
                    "0")}}"/><br>
                    <a>レンコン</a>
                    <input type="number" class="form-control" name="template_vegetable[lotus_root]" value="{{old('template_vegetable.banboo_shoots',
                    "0")}}"/><br>
                <h2>キノコ類</h2>
                    <a>エノキタケ（赤）</a>
                    <input type="number" class="form-control" name="template_mushroom[enokitake_red]" value="{{old('template_mushroom.enokitake_red',
                    "0")}}"/><br>
                    <a>エノキタケ（茶）</a>
                    <input type="number" class="form-control" name="template_mushroom[enokitake_brown]" value="{{old('template_mushroom.enokitake_brown',
                    "0")}}"/><br>
                    <a>ブナシメジ（茶）</a>
                    <input type="number" class="form-control" name="template_mushroom[bunashimeji_brown]" value="{{old('template_mushroom.bunashimeji_brown',
                    "0")}}"/><br>
                    <a>ブナシメジ（白）</a>
                    <input type="number" class="form-control" name="template_mushroom[bunashimeji_white]" value="{{old('template_mushroom.bunashimeji_white',
                    "0")}}"/><br>
                    <a>シイタケ</a>
                    <input type="number" class="form-control" name="template_mushroom[shitake]" value="{{old('template_mushroom.shitake',
                    "0")}}"/><br>
                    <a>エリンギ</a>
                    <input type="number" class="form-control" name="template_mushroom[king_trumpet]" value="{{old('template_mushroom.king_trumpet',
                    "0")}}"/><br>
                    <a>マイタケ</a>
                    <input type="number" class="form-control" name="template_mushroom[maitake]" value="{{old('template_mushroom.maitake',
                    "0")}}"/><br>
                    <a>白マイタケ</a>
                    <input type="number" class="form-control" name="template_mushroom[maitake_white]" value="{{old('template_mushroom.maitake_white',
                    "0")}}"/><br>
                    <a>なめこ</a>
                    <input type="number" class="form-control" name="template_mushroom[nameko]" value="{{old('template_mushroom.nameko',
                    "0")}}"/><br>
                    <a>マッシュルーム</a>
                    <input type="number" class="form-control" name="template_mushroom[mushroom]" value="{{old('template_mushroom.mushroom',
                    "0")}}"/><br>
                    <a>ヒラタケ</a>
                    <input type="number" class="form-control" name="template_mushroom[oyster_mushroom]" value="{{old('template_mushroom.oyster_mushroom',
                    "0")}}"/><br>
                <h2>豆類</h2>
                    <a>枝豆</a>
                    <input type="number" class="form-control" name="template_bean[edamame]" value="{{old('template_bean.edamame',
                    "0")}}"/><br>
                    <a>大豆</a>
                    <input type="number" class="form-control" name="template_bean[soybean]" value="{{old('template_bean.soybean',
                    "0")}}"/><br>
                    <a>グリーンピース</a>
                    <input type="number" class="form-control" name="template_bean[greenpeace]" value="{{old('template_bean.greenpeace',
                    "0")}}"/><br>
                    <a>そら豆</a>
                    <input type="number" class="form-control" name="template_bean[broad_bean]" value="{{old('template_bean.broad_bean',
                    "0")}}"/><br>
                    <a>落花生</a>
                    <input type="number" class="form-control" name="template_bean[peanut]" value="{{old('template_bean.peanut',
                    "0")}}"/><br>
                    <a>エンドウ豆</a>
                    <input type="number" class="form-control" name="template_bean[endomame]" value="{{old('template_bean.edamame',
                    "0")}}"/><br>
                    <a>インゲン豆</a>
                    <input type="number" class="form-control" name="template_bean[green_bean]" value="{{old('template_bean.green_bean',
                    "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>魚介類</summary>
                    <a>アジ</a>
                    <input type="number" class="form-control" name="template_marine_products[horse_mackerel]" value="{{old('template_marine_products.horse_mackerel',
                    "0")}}"/><br>
                    <a>アナゴ</a>
                    <input type="number" class="form-control" name="template_marine_products[anago]" value="{{old('template_marine_products.anago',
                    "0")}}"/><br>
                    <a>イカ</a>
                    <input type="number" class="form-control" name="template_marine_products[squid]" value="{{old('template_marine_products.squid',
                    "0")}}"/><br>
                    <a>いくら</a>
                    <input type="number" class="form-control" name="template_marine_products[ikura]" value="{{old('template_marine_products.ikura',
                    "0")}}"/><br>
                    <a>イワシ</a>
                    <input type="number" class="form-control" name="template_marine_products[sardine]" value="{{old('template_marine_products.sardine',
                    "0")}}"/><br>
                    <a>ウナギ</a>
                    <input type="number" class="form-control" name="template_marine_products[unagi]" value="{{old('template_marine_products.unagi',
                    "0")}}"/><br>
                    <a>ウニ</a>
                    <input type="number" class="form-control" name="template_marine_products[sea_urchin]" value="{{old('template_marine_products.sea_urchin',
                    "0")}}"/><br>
                    <a>かずのこ</a>
                    <input type="number" class="form-control" name="template_marine_products[herring_roe]" value="{{old('template_marine_products.herring_roe',
                    "0")}}"/><br>
                    <a>カツオ</a>
                    <input type="number" class="form-control" name="template_marine_products[skipjack]" value="{{old('template_marine_products.skipjack',
                    "0")}}"/><br>
                    <a>カニ</a>
                    <input type="number" class="form-control" name="template_marine_products[crab]" value="{{old('template_marine_products.crab',
                    "0")}}"/><br>
                    <a>サーモン</a>
                    <input type="number" class="form-control" name="template_marine_products[salmon]" value="{{old('template_marine_products.salmon',
                    "0")}}"/><br>
                    <a>サバ</a>
                    <input type="number" class="form-control" name="template_marine_products[mackerel]" value="{{old('template_marine_products.mackerel',
                    "0")}}"/><br>
                    <a>サンマ</a>
                    <input type="number" class="form-control" name="template_marine_products[pacific_saury]" value="{{old('template_marine_products.pacific_saury',
                    "0")}}"/><br>
                    <a>シシャモ</a>
                    <input type="number" class="form-control" name="template_marine_products[shishamo]" value="{{old('template_marine_products.shishamo',
                    "0")}}"/><br>
                    <a>シラス</a>
                    <input type="number" class="form-control" name="template_marine_products[shirasu]" value="{{old('template_marine_products.shirasu',
                    "0")}}"/><br>
                    <a>すじこ</a>
                    <input type="number" class="form-control" name="template_marine_products[sujiko]" value="{{old('template_marine_products.sujiko',
                    "0")}}"/><br>
                    <a>タイ</a>
                    <input type="number" class="form-control" name="template_marine_products[sea_bream]" value="{{old('template_marine_products.sea_bream',
                    "0")}}"/><br>
                    <a>タコ</a>
                    <input type="number" class="form-control" name="template_marine_products[octopus]" value="{{old('template_marine_products.octopus',
                    "0")}}"/><br>
                    <a>タラ</a>
                    <input type="number" class="form-control" name="template_marine_products[cod]" value="{{old('template_marine_products.cod',
                    "0")}}"/><br>
                    <a>たらこ</a>
                    <input type="number" class="form-control" name="template_marine_products[tarako]" value="{{old('template_marine_products.tarako',
                    "0")}}"/><br>
                    <a>ちりめんじゃこ</a>
                    <input type="number" class="form-control" name="template_marine_products[chirimen]" value="{{old('template_marine_products.chirimen',
                    "0")}}"/><br>
                    <a>フグ</a>
                    <input type="number" class="form-control" name="template_marine_products[puffer_fish]" value="{{old('template_marine_products.puffer_fish',
                    "0")}}"/><br>
                    <a>ホッケ</a>
                    <input type="number" class="form-control" name="template_marine_products[hokke]" value="{{old('template_marine_products.hokke',
                    "0")}}"/><br>
                    <a>マグロ</a>
                    <input type="number" class="form-control" name="template_marine_products[tuna]" value="{{old('template_marine_products.tuna',
                    "0")}}"/><br>
                    <a>明太子</a>
                    <input type="number" class="form-control" name="template_marine_products[mentaiko]" value="{{old('template_marine_products.mentaiko',
                    "0")}}"/><br>
                <h2>エビ類</h2>
                    <a>エビ（バナメイエビ）</a>
                    <input type="number" class="form-control" name="template_shrimp[whiteleg_shrimp]" value="{{old('template_shrimp.whiteleg_shrimp',
                    "0")}}"/><br>
                    <a>赤エビ</a>
                    <input type="number" class="form-control" name="template_shrimp[red_shrimp]" value="{{old('template_shrimp.red_shrimp',
                    "0")}}"/><br>
                    <a>ブラックタイガー</a>
                    <input type="number" class="form-control" name="template_shrimp[black_tiger_shrimp]" value="{{old('template_shrimp.black_tiger_shrimp',
                    "0")}}"/><br>
                    <a>クルマエビ</a>
                    <input type="number" class="form-control" name="template_shrimp[kurumaebi]" value="{{old('template_shrimp.kurumaebi',
                    "0")}}"/><br>
                    <a>ボタンエビ</a>
                    <input type="number" class="form-control" name="template_shrimp[button_shrimp]" value="{{old('template_shrimp.button_shrimp',
                    "0")}}"/><br>
                    <a>甘エビ</a>
                    <input type="number" class="form-control" name="template_shrimp[sweet_shrimp]" value="{{old('template_shrimp.sweet_shrimp',
                    "0")}}"/><br>
                    <a>芝エビ</a>
                    <input type="number" class="form-control" name="template_shrimp[shiba_shrimp]" value="{{old('template_shrimp.shiba_shrimp',
                    "0")}}"/><br>
                    <a>桜エビ</a>
                    <input type="number" class="form-control" name="template_shrimp[sakura_shrimp]" value="{{old('template_shrimp.sakura_shrimp',
                    "0")}}"/><br>
                    <a>伊勢エビ</a>
                    <input type="number" class="form-control" name="template_shrimp[spiny_lobster]" value="{{old('template_shrimp.spiny_lobster',
                    "0")}}"/><br>
                    <a>ロブスター</a>
                    <input type="number" class="form-control" name="template_shrimp[lobster]" value="{{old('template_shrimp.lobster',
                    "0")}}"/><br>
                <h2>海藻類</h2>
                    <a>生メカブ</a>
                    <input type="number" class="form-control" name="template_seaweed[namamekabu]" value="{{old('template_seaweed.namamekabu',
                    "0")}}"/><br>
                    <a>生モズク</a>
                    <input type="number" class="form-control" name="template_seaweed[namamozuku]" value="{{old('template_seaweed.namamozuku',
                    "0")}}"/><br>
                    <a>生ワカメ</a>
                    <input type="number" class="form-control" name="template_seaweed[namawakame]" value="{{old('template_seaweed.namawakame',
                    "0")}}"/><br>
                <h2>貝類</h2>
                    <a>アサリ</a>
                    <input type="number" class="form-control" name="template_shellfish[asari]" value="{{old('template_shellfish.asari',
                    "0")}}"/><br>
                    <a>牡蠣</a>
                    <input type="number" class="form-control" name="template_shellfish[oyster]" value="{{old('template_shellfish.oyster',
                    "0")}}"/><br>
                    <a>シジミ</a>
                    <input type="number" class="form-control" name="template_shellfish[shijimi]" value="{{old('template_shellfish.shijimi',
                    "0")}}"/><br>
                    <a>ハマグリ</a>
                    <input type="number" class="form-control" name="template_shellfish[hamaguri]" value="{{old('template_shellfish.hamaguri',
                    "0")}}"/><br>
                    <a>ホタテ</a>
                    <input type="number" class="form-control" name="template_shellfish[scallop]" value="{{old('template_shellfish.scallop',
                    "0")}}"/><br>
                    <a>ホンビノス貝</a>
                    <input type="number" class="form-control" name="template_shellfish[hard_clam]" value="{{old('template_shellfish.hard_clam',
                    "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>肉類</summary>
                <h2>牛肉</h2>
                    <a>挽肉</a>
                    <input type="number" class="form-control" name="template_beef[beef_minced]" value="{{old('template_beef.beef_minced',
                    "0")}}"/><br>
                    <a>肩</a>
                    <input type="number" class="form-control" name="template_beef[beef_shoulder]" value="{{old('template_beef.beef_shoulder',
                    "0")}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" class="form-control" name="template_beef[beef_boston_butt]" value="{{old('template_beef.beef_boston_butt',
                    "0")}}"/><br>
                    <a>リブロース</a>
                    <input type="number" class="form-control" name="template_beef[beef_ribulose]" value="{{old('template_beef.beef_ribulose',
                    "0")}}"/><br>
                    <a>サーロイン</a>
                    <input type="number" class="form-control" name="template_beef[beef_sirloin]" value="{{old('template_beef.beef_sirloin',
                    "0")}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" class="form-control" name="template_beef[beef_fillet]" value="{{old('template_beef.beef_fillet',
                    "0")}}"/><br>
                    <a>バラ</a>
                    <input type="number" class="form-control" name="template_beef[beef_ribs]" value="{{old('template_beef.beef_ribs',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" class="form-control" name="template_beef[beef_thigh]" value="{{old('template_beef.beef_thigh',
                    "0")}}"/><br>
                    <a>ランプ</a>
                    <input type="number" class="form-control" name="template_beef[beef_rump]" value="{{old('template_beef.beef_rump',
                    "0")}}"/><br>
                    <a>スネ</a>
                    <input type="number" class="form-control" name="template_beef[beef_shin]" value="{{old('template_beef.beef_shin',
                    "0")}}"/><br>
                    <a>ネック</a>
                    <input type="number" class="form-control" name="template_beef[beef_neck]" value="{{old('template_beef.beef_neck',
                    "0")}}"/><br>
                <h2>豚肉</h2>
                    <a>挽肉</a>
                    <input type="number" class="form-control" name="template_pork[pork_minced]" value="{{old('template_pork.pork_minced',
                    "0")}}"/><br>
                    <a>肩</a>
                    <input type="number" class="form-control" name="template_pork[pork_shoulder]" value="{{old('template_pork.pork_shoulder',
                    "0")}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" class="form-control" name="template_pork[pork_boston_butt]" value="{{old('template_pork.pork_boston_butt',
                    "0")}}"/><br>
                    <a>ロース</a>
                    <input type="number" class="form-control" name="template_pork[pork_lose]" value="{{old('template_pork.pork_lose',
                    "0")}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" class="form-control" name="template_pork[pork_fillet]" value="{{old('template_pork.pork_fillet',
                    "0")}}"/><br>
                    <a>バラ</a>
                    <input type="number" class="form-control" name="template_pork[pork_ribs]" value="{{old('template_pork.pork_ribs',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" class="form-control" name="template_pork[pork_thigh]" value="{{old('template_pork.pork_thigh',
                    "0")}}"/><br>
                <h2>鶏肉</h2>
                    <a>ムネ</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_breast]" value="{{old('template_chicken.chicken_breast',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_thigh]" value="{{old('template_chicken.chicken_thigh',
                    "0")}}"/><br>
                    <a>ササミ</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_scissor]" value="{{old('template_chicken.chicken_scissor',
                    "0")}}"/><br>
                    <a>ハツ</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_heart]" value="{{old('template_chicken.chicken_heart',
                    "0")}}"/><br>
                    <a>レバー</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_lever]" value="{{old('template_chicken.chicken_lever',
                    "0")}}"/><br>
                    <a>砂肝</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_sand]" value="{{old('template_chicken.chicken_sand',
                    "0")}}"/><br>
                    <a>手羽</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_wing]" value="{{old('template_chicken.chicken_wing',
                    "0")}}"/><br>
                    <a>首皮</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_neck_skin]" value="{{old('template_chicken.chicken_neck_skin',
                    "0")}}"/><br>
                    <a>ヤゲン軟骨</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_cartilage]" value="{{old('template_chicken.chicken_cartilage',
                    "0")}}"/><br>
                    <a>テール</a>
                    <input type="number" class="form-control" name="template_chicken[chicken_tail]" value="{{old('template_chicken.chicken_tail',
                    "0")}}"/><br>
                <h2>羊肉</h2>
                    <a>ロース</a>
                    <input type="number" class="form-control" name="template_mutton[mutton_lose]" value="{{old('template_mutton.mutton_lose',
                    "0")}}"/><br>
                    <a>肩</a>
                    <input type="number" class="form-control" name="template_mutton[mutton_shoulder]" value="{{old('template_mutton.mutton_shoulder',
                    "0")}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" class="form-control" name="template_mutton[mutton_boston_butt]" value="{{old('template_mutton.mutton_boston_butt',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" class="form-control" name="template_mutton[mutton_thigh]" value="{{old('template_mutton.mutton_thigh',
                    "0")}}"/><br>
                    <a>バラ</a>
                    <input type="number" class="form-control" name="template_mutton[mutton_ribs]" value="{{old('template_mutton.mutton_ribs',
                    "0")}}"/><br>
                <h2>その他肉類</h2>
                    <a>カモ肉</a>
                    <input type="number" class="form-control" name="template_other_meat[duck_meat]" value="{{old('template_other_meat.duck_meat',
                    "0")}}"/><br>
                    <a>シカ肉</a>
                    <input type="number" class="form-control" name="template_other_meat[venison]" value="{{old('template_other_meat.venison',
                    "0")}}"/><br>
                    <a>七面鳥</a>
                    <input type="number" class="form-control" name="template_other_meat[turckey]" value="{{old('template_other_meat.turckey',
                    "0")}}"/><br>
                    <a>ベーコン</a>
                    <input type="number" class="form-control" name="template_other_meat[bacon]" value="{{old('template_other_meat.bacon',
                    "0")}}"/><br>
                    <a>ハム</a>
                    <input type="number" class="form-control" name="template_other_meat[ham]" value="{{old('template_other_meat.ham',
                    "0")}}"/><br>
                    <a>ソーセージ</a>
                    <input type="number" class="form-control" name="template_other_meat[sausage]" value="{{old('template_other_meat.sausage',
                    "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>卵・チーズ・乳製品</summary>
                    <a>ヨーグルト</a>
                    <input type="number" class="form-control" name="template_eggmilk[yogurt]" value="{{old('template_eggmilk.yogurt',
                    "0")}}"/><br>
                    <a>牛乳</a>
                    <input type="number" class="form-control" name="template_eggmilk[milk]" value="{{old('template_eggmilk.milk',
                    "0")}}"/><br>
                    <a>生クリーム</a>
                    <input type="number" class="form-control" name="template_eggmilk[fresh_cream]" value="{{old('template_eggmilk.fresh_cream',
                    "0")}}"/><br>
                    <a>バター</a>
                    <input type="number" class="form-control" name="template_eggmilk[butter]" value="{{old('template_eggmilk.butter',
                    "0")}}"/><br>
                    <a>マーガリン</a>
                    <input type="number" class="form-control" name="template_eggmilk[margarine]" value="{{old('template_eggmilk.margarine',
                    "0")}}"/><br>
                    <a>卵</a>
                    <input type="number" class="form-control" name="template_eggmilk[egg]" value="{{old('template_eggmilk.egg',
                    "0")}}"/><br>
                    <a>ウズラ卵</a>
                    <input type="number" class="form-control" name="template_eggmilk[quail_egg]" value="{{old('template_eggmilk.quail_egg',
                    "0")}}"/><br>
                    <a>ピータン</a>
                    <input type="number" class="form-control" name="template_eggmilk[century_egg]" value="{{old('template_eggmilk.century_egg',
                    "0")}}"/><br>
                    <a>温泉卵</a>
                    <input type="number" class="form-control" name="template_eggmilk[hot_spring_egg]" value="{{old('template_eggmilk.hot_spring_egg',
                    "0")}}"/><br>
                    <a>燻製卵</a>
                    <input type="number" class="form-control" name="template_eggmilk[smoked_egg]" value="{{old('template_eggmilk.smoked_egg',
                    "0")}}"/><br>
                <h2>チーズ類</h2>
                    <a>カマンベール</a>
                    <input type="number" class="form-control" name="template_cheese[camembert_cheese]" value="{{old('template_cheese.camembert_cheese',
                    "0")}}"/><br>
                    <a>クリーム</a>
                    <input type="number" class="form-control" name="template_cheese[cream_cheese]" value="{{old('template_cheese.cream_cheese',
                    "0")}}"/><br>
                    <a>ゴルゴンゾーラ</a>
                    <input type="number" class="form-control" name="template_cheese[gorgonzola_cheese]" value="{{old('template_cheese.gorgonzola_cheese',
                    "0")}}"/><br>
                    <a>ゴーダ</a>
                    <input type="number" class="form-control" name="template_cheese[gouda_cheese]" value="{{old('template_cheese.gouda_cheese',
                    "0")}}"/><br>
                    <a>チェダー</a>
                    <input type="number" class="form-control" name="template_cheese[cheddar_cheese]" value="{{old('template_cheese.cheddar_cheese',
                    "0")}}"/><br>
                    <a>マスカルポーネ</a>
                    <input type="number" class="form-control" name="template_cheese[mascarpone_cheese]" value="{{old('template_cheese.mascarpone_cheese',
                    "0")}}"/><br>
                    <a>モッツァレラ</a>
                    <input type="number" class="form-control" name="template_cheese[mozzarella_cheese]" value="{{old('template_cheese.mozzarella_cheese',
                    "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>果物類</summary>
                <a>あんず</a>
                <input type="number" class="form-control" name="template_fruits[apricot]" value="{{old('template_fruits.apricot',
                "0")}}"/><br>
                <a>イチゴ</a>
                <input type="number" class="form-control" name="template_fruits[strawberry]" value="{{old('template_fruits.strawberry',
                "0")}}"/><br>
                <a>イチジク</a>
                <input type="number" class="form-control" name="template_fruits[fig]" value="{{old('template_fruits.fig',
                "0")}}"/>
                <a>梅</a>
                <input type="number" class="form-control" name="template_fruits[plum]" value="{{old('template_fruits.plum',
                "0")}}"/><br>
                <a>オレンジ</a>
                <input type="number" class="form-control" name="template_fruits[orange]" value="{{old('template_fruits.orange',
                "0")}}"/><br>
                <a>柿</a>
                <input type="number" class="form-control" name="template_fruits[persimmon]" value="{{old('template_fruits.persimmon',
                "0")}}"/><br>
                <a>キウイフルーツ</a>
                <input type="number" class="form-control" name="template_fruits[kiwifruit]" value="{{old('template_fruits.kiwifruit',
                "0")}}"/><br>
                <a>栗</a>
                <input type="number" class="form-control" name="template_fruits[chestnut]" value="{{old('template_fruits.chestnut',
                "0")}}"/><br>
                <a>グレープフルーツ</a>
                <input type="number" class="form-control" name="template_fruits[grapefruit]" value="{{old('template_fruits.grapefruit',
                "0")}}"/><br>
                <a>サクランボ</a>
                <input type="number" class="form-control" name="template_fruits[cherry]" value="{{old('template_fruits.cherry',
                "0")}}"/><br>
                <a>ザクロ</a>
                <input type="number" class="form-control" name="template_fruits[pomegranate]" value="{{old('template_fruits.pomegranate',
                "0")}}"/><br>
                <a>スイカ</a>
                <input type="number" class="form-control" name="template_fruits[watermelon]" value="{{old('template_fruits.watermelon',
                "0")}}"/><br>
                <a>ナシ</a>
                <input type="number" class="form-control" name="template_fruits[japanese_pear]" value="{{old('template_fruits.japanese_pear',
                "0")}}"/><br>
                <a>洋ナシ</a>
                <input type="number" class="form-control" name="template_fruits[pear]" value="{{old('template_fruits.pear',
                "0")}}"/><br>
                <a>パイナップル</a>
                <input type="number" class="form-control" name="template_fruits[pineapple]" value="{{old('template_fruits.pineapple',
                "0")}}"/><br>
                <a>バナナ</a>
                <input type="number" class="form-control" name="template_fruits[banana]" value="{{old('template_fruits.banana',
                "0")}}"/><br>
                <a>ビワ</a>
                <input type="number" class="form-control" name="template_fruits[loquat]" value="{{old('template_fruits.loquat',
                "0")}}"/><br>
                <a>ブドウ</a>
                <input type="number" class="form-control" name="template_fruits[grape]" value="{{old('template_fruits.grape',
                "0")}}"/><br>
                <a>ブルーベリー</a>
                <input type="number" class="form-control" name="template_fruits[blueberry]" value="{{old('template_fruits.blueberry',
                "0")}}"/><br>
                <a>その他ベリー類</a>
                <input type="number" class="form-control" name="template_fruits[other_berries]" value="{{old('template_fruits.other_berries',
                "0")}}"/><br>
                <a>マンゴー</a>
                <input type="number" class="form-control" name="template_fruits[mango]" value="{{old('template_fruits.mango',
                "0")}}"/><br>
                <a>ミカン</a>
                <input type="number" class="form-control" name="template_fruits[mikan]" value="{{old('template_fruits.mikan',
                "0")}}"/><br>
                <a>メロン</a>
                <input type="number" class="form-control" name="template_fruits[melon]" value="{{old('template_fruits.melon',
                "0")}}"/><br>
                <a>モモ</a>
                <input type="number" class="form-control" name="template_fruits[peach]" value="{{old('template_fruits.peach',
                "0")}}"/><br>
                <a>リンゴ</a>
                <input type="number" class="form-control" name="template_fruits[apple]" value="{{old('template_fruits.apple',
                "0")}}"/><br>
                <a>レモン</a>
                <input type="number" class="form-control" name="template_fruits[lemon]" value="{{old('template_fruits.lemon',
                "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>漬物・豆腐・納豆</summary>
                <a>厚揚げ</a>
                <input type="number" class="form-control" name="template_tohunattopickles[atsuage]" value="{{old('template_tohunattopickles.atsuage',
                "0")}}"/><br>
                <a>油揚げ</a>
                <input type="number" class="form-control" name="template_tohunattopickles[fried_tohu]" value="{{old('template_tohunattopickles.fried_tohu',
                "0")}}"/><br>
                <a>梅干し</a>
                <input type="number" class="form-control" name="template_tohunattopickles[salted_plum]" value="{{old('template_tohunattopickles.salted_plum',
                "0")}}"/><br>
                <a>キムチ</a>
                <input type="number" class="form-control" name="template_tohunattopickles[kimchi]" value="{{old('template_tohunattopickles.kimchi',
                "0")}}"/><br>
                <a>こんにゃく</a>
                <input type="number" class="form-control" name="template_tohunattopickles[konjac]" value="{{old('template_tohunattopickles.konjac',
                "0")}}"/><br>
                <a>ザーサイ</a>
                <input type="number" class="form-control" name="template_tohunattopickles[zha_cai]" value="{{old('template_tohunattopickles.zha_cai',
                "0")}}"/><br>
                <a>白滝</a>
                <input type="number" class="form-control" name="template_tohunattopickles[shirataki]" value="{{old('template_tohunattopickles.shirataki',
                "0")}}"/><br>
                <a>たくあん</a>
                <input type="number" class="form-control" name="template_tohunattopickles[pickled_radish]" value="{{old('template_tohunattopickles.pickled_radish',
                "0")}}"/><br>
                <a>佃煮</a>
                <input type="number" class="form-control" name="template_tohunattopickles[tsukudani]" value="{{old('template_tohunattopickles.tsukudani',
                "0")}}"/><br>
                <a>豆腐</a>
                <input type="number" class="form-control" name="template_tohunattopickles[tohu]" value="{{old('template_tohunattopickles.tohu',
                "0")}}"/><br>
                <a>豆腐よう</a>
                <input type="number" class="form-control" name="template_tohunattopickles[tohuyou]" value="{{old('template_tohunattopickles.tohuyou',
                "0")}}"/><br>
                <a>納豆</a>
                <input type="number" class="form-control" name="template_tohunattopickles[natto]" value="{{old('template_tohunattopickles.natto',
                "0")}}"/><br>
                <a>生湯葉</a>
                <input type="number" class="form-control" name="template_tohunattopickles[namayuba]" value="{{old('template_tohunattopickles.namayuba',
                "0")}}"/><br>
                <a>メンマ</a>
                <input type="number" class="form-control" name="template_tohunattopickles[menma]" value="{{old('template_tohunattopickles.menma',
                "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>練り物類</summary>
                <a>かまぼこ</a>
                <input type="number" class="form-control" name="template_kneaded_material[kamaboko]" value="{{old('template_kneaded_material.kamaboko',
                "0")}}"/><br>
                <a>伊達巻き</a>
                <input type="number" class="form-control" name="template_kneaded_material[datemaki]" value="{{old('template_kneaded_material.datemaki',
                "0")}}"/><br>
                <a>つみれ</a>
                <input type="number" class="form-control" name="template_kneaded_material[tsumire]" value="{{old('template_kneaded_material.tsumire',
                "0")}}"/><br>
                <a>生ちくわ</a>
                <input type="number" class="form-control" name="template_kneaded_material[namachikuwa]" value="{{old('template_kneaded_material.namachikuwa',
                "0")}}"/><br>
                <a>はんぺん</a>
                <input type="number" class="form-control" name="template_kneaded_material[hanpen]" value="{{old('template_kneaded_material.hanpen',
                "0")}}"/><br>
                <a>焼きちくわ</a>
                <input type="number" class="form-control" name="template_kneaded_material[yakichikuwa]" value="{{old('template_kneaded_material.yakichikuwa',
                "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>粉類</summary>
                <a>お好み焼き粉</a>
                <input type="number" class="form-control" name="template_powders[okonomiyaki_flour]" value="{{old('template_powders.okonomiyaki_flour',
                "0")}}"/><br>
                <a>片栗粉</a>
                <input type="number" class="form-control" name="template_powders[starch]" value="{{old('template_powders.starch',
                "0")}}"/><br>
                <a>唐揚げ粉</a>
                <input type="number" class="form-control" name="template_powders[fried_chicken_flour]" value="{{old('template_powders.fried_chicken_flour',
                "0")}}"/><br>
                <a>小麦粉</a>
                <input type="number" class="form-control" name="template_powders[flour]" value="{{old('template_powders.flour',
                "0")}}"/><br>
                <a>小麦胚芽</a>
                <input type="number" class="form-control" name="template_powders[wheat_germ]" value="{{old('template_powders.wheat_germ',
                "0")}}"/><br>
                <a>米粉</a>
                <input type="number" class="form-control" name="template_powders[rice_flour]" value="{{old('template_powders.rice_flour',
                "0")}}"/><br>
                <a>コーンスターチ</a>
                <input type="number" class="form-control" name="template_powders[cornstarch]" value="{{old('template_powders.cornstarch',
                "0")}}"/><br>
                <a>そば粉</a>
                <input type="number" class="form-control" name="template_powders[buckwheat_flour]" value="{{old('template_powders.buckwheat_flour',
                "0")}}"/><br>
                <a>たこ焼き粉</a>
                <input type="number" class="form-control" name="template_powders[takoyaki_flour]" value="{{old('template_powders.takoyaki_flour',
                "0")}}"/><br>
                <a>天ぷら粉</a>
                <input type="number" class="form-control" name="template_powders[tempura_flour]" value="{{old('template_powders.tempura_flour',
                "0")}}"/><br>
                <a>ノンフライ用粉</a>
                <input type="number" class="form-control" name="template_powders[non_fried_flour]" value="{{old('template_powders.non_fried_flour',
                "0")}}"/><br>
                <a>パン粉</a>
                <input type="number" class="form-control" name="template_powders[bread_crumbs]" value="{{old('template_powders.bread_crumbs',
                "0")}}"/><br>
                <a>ふすま</a>
                <input type="number" class="form-control" name="template_powders[husuma]" value="{{old('template_powders.husuma',
                "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>乾物類</summary>
                <a>青のり</a>
                <input type="number" class="form-control" name="template_dried_material[green_laver]" value="{{old('template_dried_material.green_laver',
                "0")}}"/><br>
                <a>味付けのり</a>
                <input type="number" class="form-control" name="template_dried_material[seasoned_seaweed]" value="{{old('template_dried_material.seasoned_seaweed',
                "0")}}"/><br>
                <a>カツオ節</a>
                <input type="number" class="form-control" name="template_dried_material[katsuobushi]" value="{{old('template_dried_material.katsuobushi',
                "0")}}"/><br>
                <a>乾燥ひじき</a>
                <input type="number" class="form-control" name="template_dried_material[dried_hijiki]" value="{{old('template_dried_material.dried_hijiki',
                "0")}}"/><br>
                <a>乾燥豆</a>
                <input type="number" class="form-control" name="template_dried_material[dried_beans]" value="{{old('template_dried_material.dried_beans',
                "0")}}"/><br>
                <a>乾燥野菜</a>
                <input type="number" class="form-control" name="template_dried_material[dried_vagetables]" value="{{old('template_dried_material.dried_vagetables',
                "0")}}"/><br>
                <a>乾燥湯葉</a>
                <input type="number" class="form-control" name="template_dried_material[dried_yuba]" value="{{old('template_dried_material.dried_yuba',
                "0")}}"/><br>
                <a>乾燥わかめ</a>
                <input type="number" class="form-control" name="template_dried_material[dried_seaweed]" value="{{old('template_dried_material.dried_seaweed',
                "0")}}"/><br>
                <a>かんぴょう</a>
                <input type="number" class="form-control" name="template_dried_material[kanpyo]" value="{{old('template_dried_material.kanpyo',
                "0")}}"/><br>
                <a>きくらげ</a>
                <input type="number" class="form-control" name="template_dried_material[wood_ear]" value="{{old('template_dried_material.wood_ear',
                "0")}}"/><br>
                <a>きな粉</a>
                <input type="number" class="form-control" name="template_dried_material[kinako]" value="{{old('template_dried_material.kinako',
                "0")}}"/><br>
                <a>切り干し大根</a>
                <input type="number" class="form-control" name="template_dried_material[kiriboshi_daikon]" value="{{old('template_dried_material.kiriboshi_daikon',
                "0")}}"/><br>
                <a>くずきり</a>
                <input type="number" class="form-control" name="template_dried_material[kuzukiri]" value="{{old('template_dried_material.kuzukiri',
                "0")}}"/><br>
                <a>削り節</a>
                <input type="number" class="form-control" name="template_dried_material[kezuribushi]" value="{{old('template_dried_material.kezuribushi',
                "0")}}"/><br>
                <a>高野豆腐</a>
                <input type="number" class="form-control" name="template_dried_material[koya_tohu]" value="{{old('template_dried_material.koya_tohu',
                "0")}}"/><br>
                <a>ごま</a>
                <input type="number" class="form-control" name="template_dried_material[sesame]" value="{{old('template_dried_material.sesame',
                "0")}}"/><br>
                <a>だし昆布</a>
                <input type="number" class="form-control" name="template_dried_material[dashi_kelp]" value="{{old('template_dried_material.dashi_kelp',
                "0")}}"/><br>
                <a>とろろ昆布</a>
                <input type="number" class="form-control" name="template_dried_material[tororo_kelp]" value="{{old('template_dried_material.tororo_kelp',
                "0")}}"/><br>
                <a>煮干し</a>
                <input type="number" class="form-control" name="template_dried_material[niboshi]" value="{{old('template_dried_material.niboshi',
                "0")}}"/><br>
                <a>春雨</a>
                <input type="number" class="form-control" name="template_dried_material[harusame]" value="{{old('template_dried_material.harusame',
                "0")}}"/><br>
                <a>麩</a>
                <input type="number" class="form-control" name="template_dried_material[wheat_bran]" value="{{old('template_dried_material.wheat_bran',
                "0")}}"/><br>
                <a>ふりかけ</a>
                <input type="number" class="form-control" name="template_dried_material[hurikake]" value="{{old('template_dried_material.hurikake',
                "0")}}"/><br>
                <a>干しエビ</a>
                <input type="number" class="form-control" name="template_dried_material[dried_shrimp]" value="{{old('template_dried_material.dried_shrimp',
                "0")}}"/><br>
                <a>焼きのり</a>
                <input type="number" class="form-control" name="template_dried_material[grilled_seaweed]" value="{{old('template_dried_material.grilled_seaweed',
                "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>缶詰・瓶詰</summary>
                <a>缶詰の魚介類</a>
                <input type="number" class="form-control" name="template_canned_bottled[canned_fish_and_shellfish]" value="{{old('template_canned_bottled.canned_fish_and_shellfish',
                "0")}}"/><br>
                <a>缶詰のフルーツ類</a>
                <input type="number" class="form-control" name="template_canned_bottled[canned_fruit]" value="{{old('template_canned_bottled.canned_fruit',
                "0")}}"/><br>
        </details>
    </div>
    <div class="form-group">
        <details>
            <summary>調味料</summary>
                    <a>ウスターソース</a>
                    <input type="number" class="form-control" name="template_seasoning[worcestershire_sauce]" value="{{old('template_seasoning.worcestershire_sauce',
                    "0")}}"/><br>
                    <a>ケチャップ</a>
                    <input type="number" class="form-control" name="template_seasoning[ketchup]" value="{{old('template_seasoning.ketchup',
                    "0")}}"/><br>
                    <a>砂糖</a>
                    <input type="number" class="form-control" name="template_seasoning[sugar]" value="{{old('template_seasoning.sugar',
                    "0")}}"/><br>
                    <a>塩</a>
                    <input type="number" class="form-control" name="template_seasoning[salt]" value="{{old('template_seasoning.salt',
                    "0")}}"/><br>
                    <a>酢</a>
                    <input type="number" class="form-control" name="template_seasoning[vinegar]" value="{{old('template_seasoning.vinegar',
                    "0")}}"/><br>
                    <a>醤油</a>
                    <input type="number" class="form-control" name="template_seasoning[soy_sauce]" value="{{old('template_seasoning.soy_sauce',
                    "0")}}"/><br>
                    <a>だし</a>
                    <input type="number" class="form-control" name="template_seasoning[dashi]" value="{{old('template_seasoning.dashi',
                    "0")}}"/><br>
                    <a>ポン酢</a>
                    <input type="number" class="form-control" name="template_seasoning[ponzu_sauce]" value="{{old('template_seasoning.ponzu_sauce',
                    "0")}}"/><br>
                    <a>マヨネーズ</a>
                    <input type="number" class="form-control" name="template_seasoning[mayonnaise]" value="{{old('template_seasoning.mayonnaise',
                    "0")}}"/><br>
                    <a>味噌</a>
                    <input type="number" class="form-control" name="template_seasoning[miso]" value="{{old('template_seasoning.miso',
                    "0")}}"/><br>
                    <a>めんつゆ</a>
                    <input type="number" class="form-control" name="template_seasoning[noodle_soup]" value="{{old('template_seasoning.noodle_soup',
                    "0")}}"/><br>
                <h2>ドレッシング</h2>
                    <a>イタリアン</a>
                    <input type="number" class="form-control" name="template_dressing[italian_dressing]" value="{{old('template_dressing.italian_dressing',
                    "0")}}"/><br>
                    <a>青じそ</a>
                    <input type="number" class="form-control" name="template_dressing[green_perilla_dressing]" value="{{old('template_dressing.green_perilla_dressing',
                    "0")}}"/><br>
                    <a>ごま</a>
                    <input type="number" class="form-control" name="template_dressing[sesame_dressing]" value="{{old('template_dressing.sesame_dressing',
                    "0")}}"/><br>
                    <a>シーザー</a>
                    <input type="number" class="form-control" name="template_dressing[caesar_dressing]" value="{{old('template_dressing.caesar_dressing',
                    "0")}}"/><br>
                    <a>醤油</a>
                    <input type="number" class="form-control" name="template_dressing[soy_sauce_dressing]" value="{{old('template_dressing.soy_sauce_dressing',
                    "0")}}"/><br>
                    <a>中華</a>
                    <input type="number" class="form-control" name="template_dressing[chinese_dressing]" value="{{old('template_dressing.chinese_dressing',
                    "0")}}"/><br>
                    <a>フレンチ</a>
                    <input type="number" class="form-control" name="template_dressing[french_dressing]" value="{{old('template_dressing.french_dressing',
                    "0")}}"/><br>
                    <a>わさび醤油</a>
                    <input type="number" class="form-control" name="template_dressing[wasabi_soy_sauce_dressing]" value="{{old('template_dressing.wasabi_soy_sauce_dressing',
                    "0")}}"/><br>
                <h2>薬味</h2>
                    <a>大葉</a>
                    <input type="number" class="form-control" name="template_yakumi[oba]" value="{{old('template_yakumi.oba',
                    "0")}}"/><br>
                    <a>生姜</a>
                    <input type="number" class="form-control" name="template_yakumi[ginger]" value="{{old('template_yakumi.ginger',
                    "0")}}"/><br>
                    <a>三つ葉</a>
                    <input type="number" class="form-control" name="template_yakumi[mitsuba]" value="{{old('template_yakumi.mitsuba',
                    "0")}}"/><br>
                    <a>ミョウガ</a>
                    <input type="number" class="form-control" name="template_yakumi[japanese_ginger]" value="{{old('template_yakumi.japanese_ginger',
                    "0")}}"/><br>
                    <a>柚子</a>
                    <input type="number" class="form-control" name="template_yakumi[yuzu]" value="{{old('template_yakumi.yuzu',
                    "0")}}"/><br>
                    <a>わさび</a>
                    <input type="number" class="form-control" name="template_yakumi[wasabi]" value="{{old('template_yakumi.wasabi',
                    "0")}}"/><br>
                <h2>ハーブ</h2>
                    <a>パクチー</a>
                    <input type="number" class="form-control" name="template_herbs[coriander]" value="{{old('template_herbs.coriander',
                    "0")}}"/><br>
                    <a>バジル</a>
                    <input type="number" class="form-control" name="template_herbs[basil]" value="{{old('template_herbs.basil',
                    "0")}}"/><br>
                    <a>パセリ</a>
                    <input type="number" class="form-control" name="template_herbs[parsley]" value="{{old('template_herbs.parsley',
                    "0")}}"/><br>
                    <a>ルッコラ</a>
                    <input type="number" class="form-control" name="template_herbs[arugula]" value="{{old('template_herbs.arugula',
                    "0")}}"/><br>
                    <a>レモングラス</a>
                    <input type="number" class="form-control" name="template_herbs[lemongrass]" value="{{old('template_herbs.lemongrass',
                    "0")}}"/><br>
                    <a>ローズマリー</a>
                    <input type="number" class="form-control" name="template_herbs[rosemary]" value="{{old('template_herbs.rosemary',
                    "0")}}"/><br>
                <h2>オイル</h2>
                    <a>亜麻仁油</a>
                    <input type="number" class="form-control" name="template_oil[flaxseed_oil]" value="{{old('template_oil.flaxseed_oil',
                    "0")}}"/><br>
                    <a>えごま油</a>
                    <input type="number" class="form-control" name="template_oil[egoma_oil]" value="{{old('template_oil.egoma_oil',
                    "0")}}"/><br>
                    <a>オリーブオイル</a>
                    <input type="number" class="form-control" name="template_oil[olive_oil]" value="{{old('template_oil.olive_oil',
                    "0")}}"/><br>
                    <a>ココナッツオイル</a>
                    <input type="number" class="form-control" name="template_oil[coconut_oil]"value="{{old('template_oil.coconut_oil',
                    "0")}}"/><br>
                    <a>ごま油</a>
                    <input type="number" class="form-control" name="template_oil[sesame_oil]" value="{{old('template_oil.sesame_oil',
                    "0")}}"/><br>
                    <a>コーン油</a>
                    <input type="number" class="form-control" name="template_oil[corn_oil]" value="{{old('template_oil.corn_oil',
                    "0")}}"/><br>
                    <a>サラダ油</a>
                    <input type="number" class="form-control" name="template_oil[salad_oil]" value="{{old('template_oil.salad_oil',
                    "0")}}"/><br>
                    <a>菜種油</a>
                    <input type="number" class="form-control" name="template_oil[rapeseed_oil]" value="{{old('template_oil.rapeseed_oil',
                    "0")}}"/><br>
                <h2>スパイス</h2>
                    <a>ガーリック</a>
                    <input type="number" class="form-control" name="template_spices[garlic_spice]" value="{{old('template_spices.garlic_spice',
                    "0")}}"/><br>
                    <a>クミン</a>
                    <input type="number" class="form-control" name="template_spices[cumin]" value="{{old('template_spices.cumin',
                    "0")}}"/><br>
                    <a>胡椒</a>
                    <input type="number" class="form-control" name="template_spices[pepper]" value="{{old('template_spices.pepper',
                    "0")}}"/><br>
                    <a>七味</a>
                    <input type="number" class="form-control" name="template_spices[shichimi]" value="{{old('template_spices.shichimi',
                    "0")}}"/><br>
                    <a>シナモン</a>
                    <input type="number" class="form-control" name="template_spices[cinnamon]" value="{{old('template_spices.cinnamon',
                    "0")}}"/><br>
                    <a>ターメリック</a>
                    <input type="number" class="form-control" name="template_spices[turmeric]" value="{{old('template_spices.turmeric',
                    "0")}}"/><br>
                    <a>唐辛子</a>
                    <input type="number" class="form-control" name="template_spices[chili]" value="{{old('template_spices.chili',
                    "0")}}"/><br>
        </details>
    </div>
        <input type="hidden" name="template_bean[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_beef[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_canned_bottled[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_carbohydrates_bread[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_carbohydrates_cereals[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_carbohydrates_noodles[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_cheese[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_chicken[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_dressing[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_dried_material[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_eggmilk[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_fruits[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_herbs[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_kneaded_material[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_marine_products[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_mushroom[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_mutton[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_oil[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_other_meat[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_pork[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_powders[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_seasoning[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_seaweed[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_shellfish[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_shrimp[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_spices[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_tohunattopickles[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_vegetable[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_yakumi[user_id]" value="{{$id}}"/>
        <input type="hidden" name="template_title_body[user_id]" value="{{$id}}"/>
    </form>
    <a type="button" class="btn btn-link" href="/food/management/template">戻る</a>
    </div>
</body>
@endsection