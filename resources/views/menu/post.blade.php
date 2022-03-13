@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Menu Post</title>
</head>
<body>
    <h1>メニュー登録</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/food/menu/post/{{Auth::User()->id}}" method="POST">
        @csrf
        <details>
            <summary>タイトル・説明</summary>
                <p>タイトル</p>
                <input type="textarea" name="menu[title]" value="{{old('menu.title')}}"/><br>
                <p>説明</p>
                <input type="textarea" name="menu[body]" value="{{old('menu.body')}}"/><br>
        </details>
        <details>
            <summary>炭水化物（パン類・穀類・麺類）</summary>
                <h2>パン類</h2>
                    <a>食パン</a>
                    <input type="number" name="menu_carbohydrates_bread[plain_bread]" value="{{old('menu_carbohydrates_bread.plain_bread',
                    "0")}}"/><br>
                    <a>コッペパン</a>
                    <input type="number" name="menu_carbohydrates_bread[koppe_bread]" value="{{old('menu_carbohydrates_bread.koppe_bread',
                    "0")}}"/><br>
                    <a>クロワッサン</a>
                    <input type="number" name="menu_carbohydrates_bread[croissant]" value="{{old('menu_carbohydrates_bread.croissant',
                    "0")}}"/><br>
                    <a>ロールパン</a>
                    <input type="number" name="menu_carbohydrates_bread[bread_roll]" value="{{old('menu_carbohydrates_bread.bread_roll',
                    "0")}}"/><br>
                    <a>ベーグル</a>
                    <input type="number" name="menu_carbohydrates_bread[bagel]" value="{{old('menu_carbohydrates_bread.bagel',
                    "0")}}"/><br>
                    <a>デニッシュ</a>
                    <input type="number" name="menu_carbohydrates_bread[danish]" value="{{old('menu_carbohydrates_bread.danish',
                    "0")}}"/><br>
                    <a>スコーン</a>
                    <input type="number" name="menu_carbohydrates_bread[scone]" value="{{old('menu_carbohydrates_bread.scone',
                    "0")}}"/><br>
                    <a>バゲット</a>
                    <input type="number" name="menu_carbohydrates_bread[baguette]" value="{{old('menu_carbohydrates_bread.baguette',
                    "0")}}"/><br>
                    <a>バタール</a>
                    <input type="number" name="menu_carbohydrates_bread[batal]" value="{{old('menu_carbohydrates_bread.batal',
                    "0")}}"/><br>
                    <a>ナン</a>
                    <input type="number" name="menu_carbohydrates_bread[naan]" value="{{old('menu_carbohydrates_bread.naan',
                    "0")}}"/><br>
                    <a>グリッシーニ</a>
                    <input type="number" name="menu_carbohydrates_bread[grissini]" value="{{old('menu_carbohydrates_bread.grissini',
                    "0")}}"/><br>
                    <a>マフィン</a>
                    <input type="number" name="menu_carbohydrates_bread[muffin]" value="{{old('menu_carbohydrates_bread.muffin',
                    "0")}}"/><br>
                <h2>穀類</h2>
                    <a>米</a>
                    <input type="number" name="menu_carbohydrates_cereals[rice]" value="{{old('menu_carbohydrates_cereals.rice',
                    "0")}}"/><br>
                    <a>玄米</a>
                    <input type="number" name="menu_carbohydrates_cereals[brown_rice]" value="{{old('menu_carbohydrates_cereals.brown_rice',
                    "0")}}"/><br>
                    <a>雑穀・麦</a>
                    <input type="number" name="menu_carbohydrates_cereals[millet]" value="{{old('menu_carbohydrates_cereals.millet',
                    "0")}}"/><br>
                    <a>もち米</a>
                    <input type="number" name="menu_carbohydrates_cereals[sticky_rice]" value="{{old('menu_carbohydrates_cereals.sticky_rice',
                    "0")}}"/><br>
                    <a>餅</a>
                    <input type="number" name="menu_carbohydrates_cereals[rice_cake]" value="{{old('menu_carbohydrates_cereals.rice_cake',
                    "0")}}"/><br>
                    <a>餅巾着</a>
                    <input type="number" name="menu_carbohydrates_cereals[mochikinchaku]" value="{{old('menu_carbohydrates_cereals.mochikinchaku',
                    "0")}}"/><br>
                    <a>シリアル</a>
                    <input type="number" name="menu_carbohydrates_cereals[cereal]" value="{{old('menu_carbohydrates_cereals.cereal',
                    "0")}}"/><br>
                <h2>麺類</h2>
                    <a>うどん</a>
                    <input type="number" name="menu_carbohydrates_noodles[udon]" value="{{old('menu_carbohydrates_noodles.udon',
                    "0")}}"/><br>
                    <a>そうめん</a>
                    <input type="number" name="menu_carbohydrates_noodles[somen]" value="{{old('menu_carbohydrates_noodles.somen',
                    "0")}}"/><br>
                    <a>そば</a>
                    <input type="number" name="menu_carbohydrates_noodles[soba]" value="{{old('menu_carbohydrates_noodles.soba',
                    "0")}}"/><br>
                    <a>パスタ</a>
                    <input type="number" name="menu_carbohydrates_noodles[pasta]" value="{{old('menu_carbohydrates_noodles.pasta',
                    "0")}}"/><br>
                    <a>ラーメン</a>
                    <input type="number" name="menu_carbohydrates_noodles[ramen]" value="{{old('menu_carbohydrates_noodles.ramen',
                    "0")}}"/><br>
                    <a>焼きそば</a>
                    <input type="number" name="menu_carbohydrates_noodles[fried_noodle]" value="{{old('menu_carbohydrates_noodles.fried_noodle',
                    "0")}}"/><br>
                    <a>つけ麺</a>
                    <input type="number" name="menu_carbohydrates_noodles[tsukemen]" value="{{old('menu_carbohydrates_noodles.tsukemen',
                    "0")}}"/><br>
                    <a>冷や麦</a>
                    <input type="number" name="menu_carbohydrates_noodles[hiyamugi]" value="{{old('menu_carbohydrates_noodles.hiyamugi',
                    "0")}}"/><br>
                    <a>冷麺</a>
                    <input type="number" name="menu_carbohydrates_noodles[cold_noodle]" value="{{old('menu_carbohydrates_noodles.cold_noodle',
                    "0")}}"/><br>
        </details>
        <details>
            <summary>野菜類</summary>
                    <a>アスパラガス</a>
                    <input type="number" name="menu_vegetable[asparagus]" value="{{old('menu_vegetable.asparagus',
                    "0")}}"/><br>
                    <a>かぼちゃ</a>
                    <input type="number" name="menu_vegetable[pumpkin]" value="{{old('menu_vegetable.pumpkin',
                    "0")}}"/><br>
                    <a>キャベツ</a>
                    <input type="number" name="menu_vegetable[cabbage]" value="{{old('menu_vegetable.cabbage',
                    "0")}}"/><br>
                    <a>ごぼう</a>
                    <input type="number" name="menu_vegetable[burdock]" value="{{old('menu_vegetable.burdock',
                    "0")}}"/><br>
                    <a>サツマイモ</a>
                    <input type="number" name="menu_vegetable[satsumaimo]" value="{{old('menu_vegetable.satsumaimo',
                    "0")}}"/><br>
                    <a>山菜</a>
                    <input type="number" name="menu_vegetable[sansai]" value="{{old('menu_vegetable.sansai',
                    "0")}}"/><br>
                    <a>じゃがいも</a>
                    <input type="number" name="menu_vegetable[potato]" value="{{old('menu_vegetable.potato',
                    "0")}}"/><br>
                    <a>春菊</a>
                    <input type="number" name="menu_vegetable[crowndaisy]" value="{{old('menu_vegetable.crowndaisy',
                    "0")}}"/><br>
                    <a>しょうが</a>
                    <input type="number" name="menu_vegetable[garlic]" value="{{old('menu_vegetable.garlic',
                    "0")}}"/><br>
                    <a>セロリ</a>
                    <input type="number" name="menu_vegetable[celery]" value="{{old('menu_vegetable.celery',
                    "0")}}"/><br>
                    <a>大根</a>
                    <input type="number" name="menu_vegetable[daikon]" value="{{old('menu_vegetable.daikon',
                    "0")}}"/><br>
                    <a>たけのこ</a>
                    <input type="number" name="menu_vegetable[banboo_shoots]" value="{{old('menu_vegetable.banboo_shoots',
                    "0")}}"/><br>
                    <a>たまねぎ</a>
                    <input type="number" name="menu_vegetable[onion]" value="{{old('menu_vegetable.onion',
                    "0")}}"/><br>
                    <a>豆苗</a>
                    <input type="number" name="menu_vegetable[been_seedlings]" value="{{old('menu_vegetable.been_seedlings',
                    "0")}}"/><br>
                    <a>とうもろこし</a>
                    <input type="number" name="menu_vegetable[corn]" value="{{old('menu_vegetable.corn',
                    "0")}}"/><br>
                    <a>トマト</a>
                    <input type="number" name="menu_vegetable[tomato]" value="{{old('menu_vegetable.tomato',
                    "0")}}"/><br>
                    <a>なす</a>
                    <input type="number" name="menu_vegetable[eggplant]" value="{{old('menu_vegetable.eggplant',
                    "0")}}"/><br>
                    <a>にんじん</a>
                    <input type="number" name="menu_vegetable[carrot]" value="{{old('menu_vegetable.carrot',
                    "0")}}"/><br>
                    <a>ネギ</a>
                    <input type="number" name="menu_vegetable[green_onion]" value="{{old('menu_vegetable.green_onion',
                    "0")}}"/><br>
                    <a>白菜</a>
                    <input type="number" name="menu_vegetable[chinese_cabbage]" value="{{old('menu_vegetable.chinese_cabbage',
                    "0")}}"/><br>
                    <a>ピーマン</a>
                    <input type="number" name="menu_vegetable[green_pepper]" value="{{old('menu_vegetable.green_pepper',
                    "0")}}"/><br>
                    <a>ブロッコリー</a>
                    <input type="number" name="menu_vegetable[broccoli]" value="{{old('menu_vegetable.broccoli',
                    "0")}}"/><br>
                    <a>らっきょう</a>
                    <input type="number" name="menu_vegetable[rakkyo]" value="{{old('menu_vegetable.rakkyo',
                    "0")}}"/><br>
                    <a>レタス</a>
                    <input type="number" name="menu_vegetable[lettuce]" value="{{old('menu_vegetable.lettuce',
                    "0")}}"/><br>
                    <a>レンコン</a>
                    <input type="number" name="menu_vegetable[lotus_root]" value="{{old('menu_vegetable.banboo_shoots',
                    "0")}}"/><br>
                <h2>キノコ類</h2>
                    <a>エノキタケ（赤）</a>
                    <input type="number" name="menu_mushroom[enokitake_red]" value="{{old('menu_mushroom.enokitake_red',
                    "0")}}"/><br>
                    <a>エノキタケ（茶）</a>
                    <input type="number" name="menu_mushroom[enokitake_brown]" value="{{old('menu_mushroom.enokitake_brown',
                    "0")}}"/><br>
                    <a>ブナシメジ（茶）</a>
                    <input type="number" name="menu_mushroom[bunashimeji_brown]" value="{{old('menu_mushroom.bunashimeji_brown',
                    "0")}}"/><br>
                    <a>ブナシメジ（白）</a>
                    <input type="number" name="menu_mushroom[bunashimeji_white]" value="{{old('menu_mushroom.bunashimeji_white',
                    "0")}}"/><br>
                    <a>シイタケ</a>
                    <input type="number" name="menu_mushroom[shitake]" value="{{old('menu_mushroom.shitake',
                    "0")}}"/><br>
                    <a>エリンギ</a>
                    <input type="number" name="menu_mushroom[king_trumpet]" value="{{old('menu_mushroom.king_trumpet',
                    "0")}}"/><br>
                    <a>マイタケ</a>
                    <input type="number" name="menu_mushroom[maitake]" value="{{old('menu_mushroom.maitake',
                    "0")}}"/><br>
                    <a>白マイタケ</a>
                    <input type="number" name="menu_mushroom[maitake_white]" value="{{old('menu_mushroom.maitake_white',
                    "0")}}"/><br>
                    <a>なめこ</a>
                    <input type="number" name="menu_mushroom[nameko]" value="{{old('menu_mushroom.nameko',
                    "0")}}"/><br>
                    <a>マッシュルーム</a>
                    <input type="number" name="menu_mushroom[mushroom]" value="{{old('menu_mushroom.mushroom',
                    "0")}}"/><br>
                    <a>ヒラタケ</a>
                    <input type="number" name="menu_mushroom[oyster_mushroom]" value="{{old('menu_mushroom.oyster_mushroom',
                    "0")}}"/><br>
                <h2>豆類</h2>
                    <a>枝豆</a>
                    <input type="number" name="menu_bean[edamame]" value="{{old('menu_bean.edamame',
                    "0")}}"/><br>
                    <a>大豆</a>
                    <input type="number" name="menu_bean[soybean]" value="{{old('menu_bean.soybean',
                    "0")}}"/><br>
                    <a>グリーンピース</a>
                    <input type="number" name="menu_bean[greenpeace]" value="{{old('menu_bean.greenpeace',
                    "0")}}"/><br>
                    <a>そら豆</a>
                    <input type="number" name="menu_bean[broad_bean]" value="{{old('menu_bean.broad_bean',
                    "0")}}"/><br>
                    <a>落花生</a>
                    <input type="number" name="menu_bean[peanut]" value="{{old('menu_bean.peanut',
                    "0")}}"/><br>
                    <a>エンドウ豆</a>
                    <input type="number" name="menu_bean[endomame]" value="{{old('menu_bean.edamame',
                    "0")}}"/><br>
                    <a>インゲン豆</a>
                    <input type="number" name="menu_bean[green_bean]" value="{{old('menu_bean.green_bean',
                    "0")}}"/><br>
        </details>
        <details>
            <summary>魚介類</summary>
                    <a>アジ</a>
                    <input type="number" name="menu_marine_products[horse_mackerel]" value="{{old('menu_marine_products.horse_mackerel',
                    "0")}}"/><br>
                    <a>アナゴ</a>
                    <input type="number" name="menu_marine_products[anago]" value="{{old('menu_marine_products.anago',
                    "0")}}"/><br>
                    <a>イカ</a>
                    <input type="number" name="menu_marine_products[squid]" value="{{old('menu_marine_products.squid',
                    "0")}}"/><br>
                    <a>いくら</a>
                    <input type="number" name="menu_marine_products[ikura]" value="{{old('menu_marine_products.ikura',
                    "0")}}"/><br>
                    <a>イワシ</a>
                    <input type="number" name="menu_marine_products[sardine]" value="{{old('menu_marine_products.sardine',
                    "0")}}"/><br>
                    <a>ウナギ</a>
                    <input type="number" name="menu_marine_products[unagi]" value="{{old('menu_marine_products.unagi',
                    "0")}}"/><br>
                    <a>ウニ</a>
                    <input type="number" name="menu_marine_products[sea_urchin]" value="{{old('menu_marine_products.sea_urchin',
                    "0")}}"/><br>
                    <a>かずのこ</a>
                    <input type="number" name="menu_marine_products[herring_roe]" value="{{old('menu_marine_products.herring_roe',
                    "0")}}"/><br>
                    <a>カツオ</a>
                    <input type="number" name="menu_marine_products[skipjack]" value="{{old('menu_marine_products.skipjack',
                    "0")}}"/><br>
                    <a>カニ</a>
                    <input type="number" name="menu_marine_products[crab]" value="{{old('menu_marine_products.crab',
                    "0")}}"/><br>
                    <a>サーモン</a>
                    <input type="number" name="menu_marine_products[salmon]" value="{{old('menu_marine_products.salmon',
                    "0")}}"/><br>
                    <a>サバ</a>
                    <input type="number" name="menu_marine_products[mackerel]" value="{{old('menu_marine_products.mackerel',
                    "0")}}"/><br>
                    <a>サンマ</a>
                    <input type="number" name="menu_marine_products[pacific_saury]" value="{{old('menu_marine_products.pacific_saury',
                    "0")}}"/><br>
                    <a>シシャモ</a>
                    <input type="number" name="menu_marine_products[shishamo]" value="{{old('menu_marine_products.shishamo',
                    "0")}}"/><br>
                    <a>シラス</a>
                    <input type="number" name="menu_marine_products[shirasu]" value="{{old('menu_marine_products.shirasu',
                    "0")}}"/><br>
                    <a>すじこ</a>
                    <input type="number" name="menu_marine_products[sujiko]" value="{{old('menu_marine_products.sujiko',
                    "0")}}"/><br>
                    <a>タイ</a>
                    <input type="number" name="menu_marine_products[sea_bream]" value="{{old('menu_marine_products.sea_bream',
                    "0")}}"/><br>
                    <a>タコ</a>
                    <input type="number" name="menu_marine_products[octopus]" value="{{old('menu_marine_products.octopus',
                    "0")}}"/><br>
                    <a>タラ</a>
                    <input type="number" name="menu_marine_products[cod]" value="{{old('menu_marine_products.cod',
                    "0")}}"/><br>
                    <a>たらこ</a>
                    <input type="number" name="menu_marine_products[tarako]" value="{{old('menu_marine_products.tarako',
                    "0")}}"/><br>
                    <a>ちりめんじゃこ</a>
                    <input type="number" name="menu_marine_products[chirimen]" value="{{old('menu_marine_products.chirimen',
                    "0")}}"/><br>
                    <a>フグ</a>
                    <input type="number" name="menu_marine_products[puffer_fish]" value="{{old('menu_marine_products.puffer_fish',
                    "0")}}"/><br>
                    <a>ホッケ</a>
                    <input type="number" name="menu_marine_products[hokke]" value="{{old('menu_marine_products.hokke',
                    "0")}}"/><br>
                    <a>マグロ</a>
                    <input type="number" name="menu_marine_products[tuna]" value="{{old('menu_marine_products.tuna',
                    "0")}}"/><br>
                    <a>明太子</a>
                    <input type="number" name="menu_marine_products[mentaiko]" value="{{old('menu_marine_products.mentaiko',
                    "0")}}"/><br>
                <h2>エビ類</h2>
                    <a>エビ（バナメイエビ）</a>
                    <input type="number" name="menu_shrimp[whiteleg_shrimp]" value="{{old('menu_shrimp.whiteleg_shrimp',
                    "0")}}"/><br>
                    <a>赤エビ</a>
                    <input type="number" name="menu_shrimp[red_shrimp]" value="{{old('menu_shrimp.red_shrimp',
                    "0")}}"/><br>
                    <a>ブラックタイガー</a>
                    <input type="number" name="menu_shrimp[black_tiger_shrimp]" value="{{old('menu_shrimp.black_tiger_shrimp',
                    "0")}}"/><br>
                    <a>クルマエビ</a>
                    <input type="number" name="menu_shrimp[kurumaebi]" value="{{old('menu_shrimp.kurumaebi',
                    "0")}}"/><br>
                    <a>ボタンエビ</a>
                    <input type="number" name="menu_shrimp[button_shrimp]" value="{{old('menu_shrimp.button_shrimp',
                    "0")}}"/><br>
                    <a>甘エビ</a>
                    <input type="number" name="menu_shrimp[sweet_shrimp]" value="{{old('menu_shrimp.sweet_shrimp',
                    "0")}}"/><br>
                    <a>芝エビ</a>
                    <input type="number" name="menu_shrimp[shiba_shrimp]" value="{{old('menu_shrimp.shiba_shrimp',
                    "0")}}"/><br>
                    <a>桜エビ</a>
                    <input type="number" name="menu_shrimp[sakura_shrimp]" value="{{old('menu_shrimp.sakura_shrimp',
                    "0")}}"/><br>
                    <a>伊勢エビ</a>
                    <input type="number" name="menu_shrimp[spiny_lobster]" value="{{old('menu_shrimp.spiny_lobster',
                    "0")}}"/><br>
                    <a>ロブスター</a>
                    <input type="number" name="menu_shrimp[lobster]" value="{{old('menu_shrimp.lobster',
                    "0")}}"/><br>
                <h2>海藻類</h2>
                    <a>生メカブ</a>
                    <input type="number" name="menu_seaweed[namamekabu]" value="{{old('menu_seaweed.namamekabu',
                    "0")}}"/><br>
                    <a>生モズク</a>
                    <input type="number" name="menu_seaweed[namamozuku]" value="{{old('menu_seaweed.namamozuku',
                    "0")}}"/><br>
                    <a>生ワカメ</a>
                    <input type="number" name="menu_seaweed[namawakame]" value="{{old('menu_seaweed.namawakame',
                    "0")}}"/><br>
                <h2>貝類</h2>
                    <a>アサリ</a>
                    <input type="number" name="menu_shellfish[asari]" value="{{old('menu_shellfish.asari',
                    "0")}}"/><br>
                    <a>牡蠣</a>
                    <input type="number" name="menu_shellfish[oyster]" value="{{old('menu_shellfish.oyster',
                    "0")}}"/><br>
                    <a>シジミ</a>
                    <input type="number" name="menu_shellfish[shijimi]" value="{{old('menu_shellfish.shijimi',
                    "0")}}"/><br>
                    <a>ハマグリ</a>
                    <input type="number" name="menu_shellfish[hamaguri]" value="{{old('menu_shellfish.hamaguri',
                    "0")}}"/><br>
                    <a>ホタテ</a>
                    <input type="number" name="menu_shellfish[scallop]" value="{{old('menu_shellfish.scallop',
                    "0")}}"/><br>
                    <a>ホンビノス貝</a>
                    <input type="number" name="menu_shellfish[hard_clam]" value="{{old('menu_shellfish.hard_clam',
                    "0")}}"/><br>
        </details>
        <details>
            <summary>肉類</summary>
                <h2>牛肉</h2>
                    <a>挽肉</a>
                    <input type="number" name="menu_beef[beef_minced]" value="{{old('menu_beef.beef_minced',
                    "0")}}"/><br>
                    <a>肩</a>
                    <input type="number" name="menu_beef[beef_shoulder]" value="{{old('menu_beef.beef_shoulder',
                    "0")}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="menu_beef[beef_boston_butt]" value="{{old('menu_beef.beef_boston_butt',
                    "0")}}"/><br>
                    <a>リブロース</a>
                    <input type="number" name="menu_beef[beef_ribulose]" value="{{old('menu_beef.beef_ribulose',
                    "0")}}"/><br>
                    <a>サーロイン</a>
                    <input type="number" name="menu_beef[beef_sirloin]" value="{{old('menu_beef.beef_sirloin',
                    "0")}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" name="menu_beef[beef_fillet]" value="{{old('menu_beef.beef_fillet',
                    "0")}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="menu_beef[beef_ribs]" value="{{old('menu_beef.beef_ribs',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="menu_beef[beef_thigh]" value="{{old('menu_beef.beef_thigh',
                    "0")}}"/><br>
                    <a>ランプ</a>
                    <input type="number" name="menu_beef[beef_rump]" value="{{old('menu_beef.beef_rump',
                    "0")}}"/><br>
                    <a>スネ</a>
                    <input type="number" name="menu_beef[beef_shin]" value="{{old('menu_beef.beef_shin',
                    "0")}}"/><br>
                    <a>ネック</a>
                    <input type="number" name="menu_beef[beef_neck]" value="{{old('menu_beef.beef_neck',
                    "0")}}"/><br>
                <h2>豚肉</h2>
                    <a>挽肉</a>
                    <input type="number" name="menu_pork[pork_minced]" value="{{old('menu_pork.pork_minced',
                    "0")}}"/><br>
                    <a>肩</a>
                    <input type="number" name="menu_pork[pork_shoulder]" value="{{old('menu_pork.pork_shoulder',
                    "0")}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="menu_pork[pork_boston_butt]" value="{{old('menu_pork.pork_boston_butt',
                    "0")}}"/><br>
                    <a>ロース</a>
                    <input type="number" name="menu_pork[pork_lose]" value="{{old('menu_pork.pork_lose',
                    "0")}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" name="menu_pork[pork_fillet]" value="{{old('menu_pork.pork_fillet',
                    "0")}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="menu_pork[pork_ribs]" value="{{old('menu_pork.pork_ribs',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="menu_pork[pork_thigh]" value="{{old('menu_pork.pork_thigh',
                    "0")}}"/><br>
                <h2>鶏肉</h2>
                    <a>ムネ</a>
                    <input type="number" name="menu_chicken[chicken_breast]" value="{{old('menu_chicken.chicken_breast',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="menu_chicken[chicken_thigh]" value="{{old('menu_chicken.chicken_thigh',
                    "0")}}"/><br>
                    <a>ササミ</a>
                    <input type="number" name="menu_chicken[chicken_scissor]" value="{{old('menu_chicken.chicken_scissor',
                    "0")}}"/><br>
                    <a>ハツ</a>
                    <input type="number" name="menu_chicken[chicken_heart]" value="{{old('menu_chicken.chicken_heart',
                    "0")}}"/><br>
                    <a>レバー</a>
                    <input type="number" name="menu_chicken[chicken_lever]" value="{{old('menu_chicken.chicken_lever',
                    "0")}}"/><br>
                    <a>砂肝</a>
                    <input type="number" name="menu_chicken[chicken_sand]" value="{{old('menu_chicken.chicken_sand',
                    "0")}}"/><br>
                    <a>手羽</a>
                    <input type="number" name="menu_chicken[chicken_wing]" value="{{old('menu_chicken.chicken_wing',
                    "0")}}"/><br>
                    <a>首皮</a>
                    <input type="number" name="menu_chicken[chicken_neck_skin]" value="{{old('menu_chicken.chicken_neck_skin',
                    "0")}}"/><br>
                    <a>ヤゲン軟骨</a>
                    <input type="number" name="menu_chicken[chicken_cartilage]" value="{{old('menu_chicken.chicken_cartilage',
                    "0")}}"/><br>
                    <a>テール</a>
                    <input type="number" name="menu_chicken[chicken_tail]" value="{{old('menu_chicken.chicken_tail',
                    "0")}}"/><br>
                <h2>羊肉</h2>
                    <a>ロース</a>
                    <input type="number" name="menu_mutton[mutton_lose]" value="{{old('menu_mutton.mutton_lose',
                    "0")}}"/><br>
                    <a>肩</a>
                    <input type="number" name="menu_mutton[mutton_shoulder]" value="{{old('menu_mutton.mutton_shoulder',
                    "0")}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="menu_mutton[mutton_boston_butt]" value="{{old('menu_mutton.mutton_boston_butt',
                    "0")}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="menu_mutton[mutton_thigh]" value="{{old('menu_mutton.mutton_thigh',
                    "0")}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="menu_mutton[mutton_ribs]" value="{{old('menu_mutton.mutton_ribs',
                    "0")}}"/><br>
                <h2>その他肉類</h2>
                    <a>カモ肉</a>
                    <input type="number" name="menu_other_meat[duck_meat]" value="{{old('menu_other_meat.duck_meat',
                    "0")}}"/><br>
                    <a>シカ肉</a>
                    <input type="number" name="menu_other_meat[venison]" value="{{old('menu_other_meat.venison',
                    "0")}}"/><br>
                    <a>七面鳥</a>
                    <input type="number" name="menu_other_meat[turckey]" value="{{old('menu_other_meat.turckey',
                    "0")}}"/><br>
                    <a>ベーコン</a>
                    <input type="number" name="menu_other_meat[bacon]" value="{{old('menu_other_meat.bacon',
                    "0")}}"/><br>
                    <a>ハム</a>
                    <input type="number" name="menu_other_meat[ham]" value="{{old('menu_other_meat.ham',
                    "0")}}"/><br>
                    <a>ソーセージ</a>
                    <input type="number" name="menu_other_meat[sausage]" value="{{old('menu_other_meat.sausage',
                    "0")}}"/><br>
        </details>
        <details>
            <summary>卵・チーズ・乳製品</summary>
                    <a>ヨーグルト</a>
                    <input type="number" name="menu_eggmilk[yogurt]" value="{{old('menu_eggmilk.yogurt',
                    "0")}}"/><br>
                    <a>牛乳</a>
                    <input type="number" name="menu_eggmilk[milk]" value="{{old('menu_eggmilk.milk',
                    "0")}}"/><br>
                    <a>生クリーム</a>
                    <input type="number" name="menu_eggmilk[fresh_cream]" value="{{old('menu_eggmilk.fresh_cream',
                    "0")}}"/><br>
                    <a>バター</a>
                    <input type="number" name="menu_eggmilk[butter]" value="{{old('menu_eggmilk.butter',
                    "0")}}"/><br>
                    <a>マーガリン</a>
                    <input type="number" name="menu_eggmilk[margarine]" value="{{old('menu_eggmilk.margarine',
                    "0")}}"/><br>
                    <a>卵</a>
                    <input type="number" name="menu_eggmilk[egg]" value="{{old('menu_eggmilk.egg',
                    "0")}}"/><br>
                    <a>ウズラ卵</a>
                    <input type="number" name="menu_eggmilk[quail_egg]" value="{{old('menu_eggmilk.quail_egg',
                    "0")}}"/><br>
                    <a>ピータン</a>
                    <input type="number" name="menu_eggmilk[century_egg]" value="{{old('menu_eggmilk.century_egg',
                    "0")}}"/><br>
                    <a>温泉卵</a>
                    <input type="number" name="menu_eggmilk[hot_spring_egg]" value="{{old('menu_eggmilk.hot_spring_egg',
                    "0")}}"/><br>
                    <a>燻製卵</a>
                    <input type="number" name="menu_eggmilk[smoked_egg]" value="{{old('menu_eggmilk.smoked_egg',
                    "0")}}"/><br>
                <h2>チーズ類</h2>
                    <a>カマンベール</a>
                    <input type="number" name="menu_cheese[camembert_cheese]" value="{{old('menu_cheese.camembert_cheese',
                    "0")}}"/><br>
                    <a>クリーム</a>
                    <input type="number" name="menu_cheese[cream_cheese]" value="{{old('menu_cheese.cream_cheese',
                    "0")}}"/><br>
                    <a>ゴルゴンゾーラ</a>
                    <input type="number" name="menu_cheese[gorgonzola_cheese]" value="{{old('menu_cheese.gorgonzola_cheese',
                    "0")}}"/><br>
                    <a>ゴーダ</a>
                    <input type="number" name="menu_cheese[gouda_cheese]" value="{{old('menu_cheese.gouda_cheese',
                    "0")}}"/><br>
                    <a>チェダー</a>
                    <input type="number" name="menu_cheese[cheddar_cheese]" value="{{old('menu_cheese.cheddar_cheese',
                    "0")}}"/><br>
                    <a>マスカルポーネ</a>
                    <input type="number" name="menu_cheese[mascarpone_cheese]" value="{{old('menu_cheese.mascarpone_cheese',
                    "0")}}"/><br>
                    <a>モッツァレラ</a>
                    <input type="number" name="menu_cheese[mozzarella_cheese]" value="{{old('menu_cheese.mozzarella_cheese',
                    "0")}}"/><br>
        </details>
        <details>
            <summary>果物類</summary>
                <a>あんず</a>
                <input type="number" name="menu_fruits[apricot]" value="{{old('menu_fruits.apricot',
                "0")}}"/><br>
                <a>イチゴ</a>
                <input type="number" name="menu_fruits[strawberry]" value="{{old('menu_fruits.strawberry',
                "0")}}"/><br>
                <a>イチジク</a>
                <input type="number" name="menu_fruits[fig]" value="{{old('menu_fruits.fig',
                "0")}}"/>
                <a>梅</a>
                <input type="number" name="menu_fruits[plum]" value="{{old('menu_fruits.plum',
                "0")}}"/><br>
                <a>オレンジ</a>
                <input type="number" name="menu_fruits[orange]" value="{{old('menu_fruits.orange',
                "0")}}"/><br>
                <a>柿</a>
                <input type="number" name="menu_fruits[persimmon]" value="{{old('menu_fruits.persimmon',
                "0")}}"/><br>
                <a>キウイフルーツ</a>
                <input type="number" name="menu_fruits[kiwifruit]" value="{{old('menu_fruits.kiwifruit',
                "0")}}"/><br>
                <a>栗</a>
                <input type="number" name="menu_fruits[chestnut]" value="{{old('menu_fruits.chestnut',
                "0")}}"/><br>
                <a>グレープフルーツ</a>
                <input type="number" name="menu_fruits[grapefruit]" value="{{old('menu_fruits.grapefruit',
                "0")}}"/><br>
                <a>サクランボ</a>
                <input type="number" name="menu_fruits[cherry]" value="{{old('menu_fruits.cherry',
                "0")}}"/><br>
                <a>ザクロ</a>
                <input type="number" name="menu_fruits[pomegranate]" value="{{old('menu_fruits.pomegranate',
                "0")}}"/><br>
                <a>スイカ</a>
                <input type="number" name="menu_fruits[watermelon]" value="{{old('menu_fruits.watermelon',
                "0")}}"/><br>
                <a>ナシ</a>
                <input type="number" name="menu_fruits[japanese_pear]" value="{{old('menu_fruits.japanese_pear',
                "0")}}"/><br>
                <a>洋ナシ</a>
                <input type="number" name="menu_fruits[pear]" value="{{old('menu_fruits.pear',
                "0")}}"/><br>
                <a>パイナップル</a>
                <input type="number" name="menu_fruits[pineapple]" value="{{old('menu_fruits.pineapple',
                "0")}}"/><br>
                <a>バナナ</a>
                <input type="number" name="menu_fruits[banana]" value="{{old('menu_fruits.banana',
                "0")}}"/><br>
                <a>ビワ</a>
                <input type="number" name="menu_fruits[loquat]" value="{{old('menu_fruits.loquat',
                "0")}}"/><br>
                <a>ブドウ</a>
                <input type="number" name="menu_fruits[grape]" value="{{old('menu_fruits.grape',
                "0")}}"/><br>
                <a>ブルーベリー</a>
                <input type="number" name="menu_fruits[blueberry]" value="{{old('menu_fruits.blueberry',
                "0")}}"/><br>
                <a>その他ベリー類</a>
                <input type="number" name="menu_fruits[other_berries]" value="{{old('menu_fruits.other_berries',
                "0")}}"/><br>
                <a>マンゴー</a>
                <input type="number" name="menu_fruits[mango]" value="{{old('menu_fruits.mango',
                "0")}}"/><br>
                <a>ミカン</a>
                <input type="number" name="menu_fruits[mikan]" value="{{old('menu_fruits.mikan',
                "0")}}"/><br>
                <a>メロン</a>
                <input type="number" name="menu_fruits[melon]" value="{{old('menu_fruits.melon',
                "0")}}"/><br>
                <a>モモ</a>
                <input type="number" name="menu_fruits[peach]" value="{{old('menu_fruits.peach',
                "0")}}"/><br>
                <a>リンゴ</a>
                <input type="number" name="menu_fruits[apple]" value="{{old('menu_fruits.apple',
                "0")}}"/><br>
                <a>レモン</a>
                <input type="number" name="menu_fruits[lemon]" value="{{old('menu_fruits.lemon',
                "0")}}"/><br>
        </details>
        <details>
            <summary>漬物・豆腐・納豆</summary>
                <a>厚揚げ</a>
                <input type="number" name="menu_tohunattopickles[atsuage]" value="{{old('menu_tohunattopickles.atsuage',
                "0")}}"/><br>
                <a>油揚げ</a>
                <input type="number" name="menu_tohunattopickles[fried_tohu]" value="{{old('menu_tohunattopickles.fried_tohu',
                "0")}}"/><br>
                <a>梅干し</a>
                <input type="number" name="menu_tohunattopickles[salted_plum]" value="{{old('menu_tohunattopickles.salted_plum',
                "0")}}"/><br>
                <a>キムチ</a>
                <input type="number" name="menu_tohunattopickles[kimchi]" value="{{old('menu_tohunattopickles.kimchi',
                "0")}}"/><br>
                <a>こんにゃく</a>
                <input type="number" name="menu_tohunattopickles[konjac]" value="{{old('menu_tohunattopickles.konjac',
                "0")}}"/><br>
                <a>ザーサイ</a>
                <input type="number" name="menu_tohunattopickles[zha_cai]" value="{{old('menu_tohunattopickles.zha_cai',
                "0")}}"/><br>
                <a>白滝</a>
                <input type="number" name="menu_tohunattopickles[shirataki]" value="{{old('menu_tohunattopickles.shirataki',
                "0")}}"/><br>
                <a>たくあん</a>
                <input type="number" name="menu_tohunattopickles[pickled_radish]" value="{{old('menu_tohunattopickles.pickled_radish',
                "0")}}"/><br>
                <a>佃煮</a>
                <input type="number" name="menu_tohunattopickles[tsukudani]" value="{{old('menu_tohunattopickles.tsukudani',
                "0")}}"/><br>
                <a>豆腐</a>
                <input type="number" name="menu_tohunattopickles[tohu]" value="{{old('menu_tohunattopickles.tohu',
                "0")}}"/><br>
                <a>豆腐よう</a>
                <input type="number" name="menu_tohunattopickles[tohuyou]" value="{{old('menu_tohunattopickles.tohuyou',
                "0")}}"/><br>
                <a>納豆</a>
                <input type="number" name="menu_tohunattopickles[natto]" value="{{old('menu_tohunattopickles.natto',
                "0")}}"/><br>
                <a>生湯葉</a>
                <input type="number" name="menu_tohunattopickles[namayuba]" value="{{old('menu_tohunattopickles.namayuba',
                "0")}}"/><br>
                <a>メンマ</a>
                <input type="number" name="menu_tohunattopickles[menma]" value="{{old('menu_tohunattopickles.menma',
                "0")}}"/><br>
        </details>
        <details>
            <summary>練り物類</summary>
                <a>かまぼこ</a>
                <input type="number" name="menu_kneaded_material[kamaboko]" value="{{old('menu_kneaded_material.kamaboko',
                "0")}}"/><br>
                <a>伊達巻き</a>
                <input type="number" name="menu_kneaded_material[datemaki]" value="{{old('menu_kneaded_material.datemaki',
                "0")}}"/><br>
                <a>つみれ</a>
                <input type="number" name="menu_kneaded_material[tsumire]" value="{{old('menu_kneaded_material.tsumire',
                "0")}}"/><br>
                <a>生ちくわ</a>
                <input type="number" name="menu_kneaded_material[namachikuwa]" value="{{old('menu_kneaded_material.namachikuwa',
                "0")}}"/><br>
                <a>はんぺん</a>
                <input type="number" name="menu_kneaded_material[hanpen]" value="{{old('menu_kneaded_material.hanpen',
                "0")}}"/><br>
                <a>焼きちくわ</a>
                <input type="number" name="menu_kneaded_material[yakichikuwa]" value="{{old('menu_kneaded_material.yakichikuwa',
                "0")}}"/><br>
        </details>
        <details>
            <summary>粉類</summary>
                <a>お好み焼き粉</a>
                <input type="number" name="menu_powders[okonomiyaki_flour]" value="{{old('menu_powders.okonomiyaki_flour',
                "0")}}"/><br>
                <a>片栗粉</a>
                <input type="number" name="menu_powders[starch]" value="{{old('menu_powders.starch',
                "0")}}"/><br>
                <a>唐揚げ粉</a>
                <input type="number" name="menu_powders[fried_chicken_flour]" value="{{old('menu_powders.fried_chicken_flour',
                "0")}}"/><br>
                <a>小麦粉</a>
                <input type="number" name="menu_powders[flour]" value="{{old('menu_powders.flour',
                "0")}}"/><br>
                <a>小麦胚芽</a>
                <input type="number" name="menu_powders[wheat_germ]" value="{{old('menu_powders.wheat_germ',
                "0")}}"/><br>
                <a>米粉</a>
                <input type="number" name="menu_powders[rice_flour]" value="{{old('menu_powders.rice_flour',
                "0")}}"/><br>
                <a>コーンスターチ</a>
                <input type="number" name="menu_powders[cornstarch]" value="{{old('menu_powders.cornstarch',
                "0")}}"/><br>
                <a>そば粉</a>
                <input type="number" name="menu_powders[buckwheat_flour]" value="{{old('menu_powders.buckwheat_flour',
                "0")}}"/><br>
                <a>たこ焼き粉</a>
                <input type="number" name="menu_powders[takoyaki_flour]" value="{{old('menu_powders.takoyaki_flour',
                "0")}}"/><br>
                <a>天ぷら粉</a>
                <input type="number" name="menu_powders[tempura_flour]" value="{{old('menu_powders.tempura_flour',
                "0")}}"/><br>
                <a>ノンフライ用粉</a>
                <input type="number" name="menu_powders[non_fried_flour]" value="{{old('menu_powders.non_fried_flour',
                "0")}}"/><br>
                <a>パン粉</a>
                <input type="number" name="menu_powders[bread_crumbs]" value="{{old('menu_powders.bread_crumbs',
                "0")}}"/><br>
                <a>ふすま</a>
                <input type="number" name="menu_powders[husuma]" value="{{old('menu_powders.husuma',
                "0")}}"/><br>
        </details>
        <details>
            <summary>乾物類</summary>
                <a>青のり</a>
                <input type="number" name="menu_dried_material[green_laver]" value="{{old('menu_dried_material.green_laver',
                "0")}}"/><br>
                <a>味付けのり</a>
                <input type="number" name="menu_dried_material[seasoned_seaweed]" value="{{old('menu_dried_material.seasoned_seaweed',
                "0")}}"/><br>
                <a>カツオ節</a>
                <input type="number" name="menu_dried_material[katsuobushi]" value="{{old('menu_dried_material.katsuobushi',
                "0")}}"/><br>
                <a>乾燥ひじき</a>
                <input type="number" name="menu_dried_material[dried_hijiki]" value="{{old('menu_dried_material.dried_hijiki',
                "0")}}"/><br>
                <a>乾燥豆</a>
                <input type="number" name="menu_dried_material[dried_beans]" value="{{old('menu_dried_material.dried_beans',
                "0")}}"/><br>
                <a>乾燥野菜</a>
                <input type="number" name="menu_dried_material[dried_vagetables]" value="{{old('menu_dried_material.dried_vagetables',
                "0")}}"/><br>
                <a>乾燥湯葉</a>
                <input type="number" name="menu_dried_material[dried_yuba]" value="{{old('menu_dried_material.dried_yuba',
                "0")}}"/><br>
                <a>乾燥わかめ</a>
                <input type="number" name="menu_dried_material[dried_seaweed]" value="{{old('menu_dried_material.dried_seaweed',
                "0")}}"/><br>
                <a>かんぴょう</a>
                <input type="number" name="menu_dried_material[kanpyo]" value="{{old('menu_dried_material.kanpyo',
                "0")}}"/><br>
                <a>きくらげ</a>
                <input type="number" name="menu_dried_material[wood_ear]" value="{{old('menu_dried_material.wood_ear',
                "0")}}"/><br>
                <a>きな粉</a>
                <input type="number" name="menu_dried_material[kinako]" value="{{old('menu_dried_material.kinako',
                "0")}}"/><br>
                <a>切り干し大根</a>
                <input type="number" name="menu_dried_material[kiriboshi_daikon]" value="{{old('menu_dried_material.kiriboshi_daikon',
                "0")}}"/><br>
                <a>くずきり</a>
                <input type="number" name="menu_dried_material[kuzukiri]" value="{{old('menu_dried_material.kuzukiri',
                "0")}}"/><br>
                <a>削り節</a>
                <input type="number" name="menu_dried_material[kezuribushi]" value="{{old('menu_dried_material.kezuribushi',
                "0")}}"/><br>
                <a>高野豆腐</a>
                <input type="number" name="menu_dried_material[koya_tohu]" value="{{old('menu_dried_material.koya_tohu',
                "0")}}"/><br>
                <a>ごま</a>
                <input type="number" name="menu_dried_material[sesame]" value="{{old('menu_dried_material.sesame',
                "0")}}"/><br>
                <a>だし昆布</a>
                <input type="number" name="menu_dried_material[dashi_kelp]" value="{{old('menu_dried_material.dashi_kelp',
                "0")}}"/><br>
                <a>とろろ昆布</a>
                <input type="number" name="menu_dried_material[tororo_kelp]" value="{{old('menu_dried_material.tororo_kelp',
                "0")}}"/><br>
                <a>煮干し</a>
                <input type="number" name="menu_dried_material[niboshi]" value="{{old('menu_dried_material.niboshi',
                "0")}}"/><br>
                <a>春雨</a>
                <input type="number" name="menu_dried_material[harusame]" value="{{old('menu_dried_material.harusame',
                "0")}}"/><br>
                <a>麩</a>
                <input type="number" name="menu_dried_material[wheat_bran]" value="{{old('menu_dried_material.wheat_bran',
                "0")}}"/><br>
                <a>ふりかけ</a>
                <input type="number" name="menu_dried_material[hurikake]" value="{{old('menu_dried_material.hurikake',
                "0")}}"/><br>
                <a>干しエビ</a>
                <input type="number" name="menu_dried_material[dried_shrimp]" value="{{old('menu_dried_material.dried_shrimp',
                "0")}}"/><br>
                <a>焼きのり</a>
                <input type="number" name="menu_dried_material[grilled_seaweed]" value="{{old('menu_dried_material.grilled_seaweed',
                "0")}}"/><br>
        </details>
        <details>
            <summary>缶詰・瓶詰</summary>
                <a>缶詰の魚介類</a>
                <input type="number" name="menu_canned_bottled[canned_fish_and_shellfish]" value="{{old('menu_canned_bottled.canned_fish_and_shellfish',
                "0")}}"/><br>
                <a>缶詰のフルーツ類</a>
                <input type="number" name="menu_canned_bottled[canned_fruit]" value="{{old('menu_canned_bottled.canned_fruit',
                "0")}}"/><br>
        </details>
        <details>
            <summary>調味料</summary>
                    <a>ウスターソース</a>
                    <input type="number" name="menu_seasoning[worcestershire_sauce]" value="{{old('menu_seasoning.worcestershire_sauce',
                    "0")}}"/><br>
                    <a>ケチャップ</a>
                    <input type="number" name="menu_seasoning[ketchup]" value="{{old('menu_seasoning.ketchup',
                    "0")}}"/><br>
                    <a>砂糖</a>
                    <input type="number" name="menu_seasoning[sugar]" value="{{old('menu_seasoning.sugar',
                    "0")}}"/><br>
                    <a>塩</a>
                    <input type="number" name="menu_seasoning[salt]" value="{{old('menu_seasoning.salt',
                    "0")}}"/><br>
                    <a>酢</a>
                    <input type="number" name="menu_seasoning[vinegar]" value="{{old('menu_seasoning.vinegar',
                    "0")}}"/><br>
                    <a>醤油</a>
                    <input type="number" name="menu_seasoning[soy_sauce]" value="{{old('menu_seasoning.soy_sauce',
                    "0")}}"/><br>
                    <a>だし</a>
                    <input type="number" name="menu_seasoning[dashi]" value="{{old('menu_seasoning.dashi',
                    "0")}}"/><br>
                    <a>ポン酢</a>
                    <input type="number" name="menu_seasoning[ponzu_sauce]" value="{{old('menu_seasoning.ponzu_sauce',
                    "0")}}"/><br>
                    <a>マヨネーズ</a>
                    <input type="number" name="menu_seasoning[mayonnaise]" value="{{old('menu_seasoning.mayonnaise',
                    "0")}}"/><br>
                    <a>味噌</a>
                    <input type="number" name="menu_seasoning[miso]" value="{{old('menu_seasoning.miso',
                    "0")}}"/><br>
                    <a>めんつゆ</a>
                    <input type="number" name="menu_seasoning[noodle_soup]" value="{{old('menu_seasoning.noodle_soup',
                    "0")}}"/><br>
                <h2>ドレッシング</h2>
                    <a>イタリアン</a>
                    <input type="number" name="menu_dressing[italian_dressing]" value="{{old('menu_dressing.italian_dressing',
                    "0")}}"/><br>
                    <a>青じそ</a>
                    <input type="number" name="menu_dressing[green_perilla_dressing]" value="{{old('menu_dressing.green_perilla_dressing',
                    "0")}}"/><br>
                    <a>ごま</a>
                    <input type="number" name="menu_dressing[sesame_dressing]" value="{{old('menu_dressing.sesame_dressing',
                    "0")}}"/><br>
                    <a>シーザー</a>
                    <input type="number" name="menu_dressing[caesar_dressing]" value="{{old('menu_dressing.caesar_dressing',
                    "0")}}"/><br>
                    <a>醤油</a>
                    <input type="number" name="menu_dressing[soy_sauce_dressing]" value="{{old('menu_dressing.soy_sauce_dressing',
                    "0")}}"/><br>
                    <a>中華</a>
                    <input type="number" name="menu_dressing[chinese_dressing]" value="{{old('menu_dressing.chinese_dressing',
                    "0")}}"/><br>
                    <a>フレンチ</a>
                    <input type="number" name="menu_dressing[french_dressing]" value="{{old('menu_dressing.french_dressing',
                    "0")}}"/><br>
                    <a>わさび醤油</a>
                    <input type="number" name="menu_dressing[wasabi_soy_sauce_dressing]" value="{{old('menu_dressing.wasabi_soy_sauce_dressing',
                    "0")}}"/><br>
                <h2>薬味</h2>
                    <a>大葉</a>
                    <input type="number" name="menu_yakumi[oba]" value="{{old('menu_yakumi.oba',
                    "0")}}"/><br>
                    <a>生姜</a>
                    <input type="number" name="menu_yakumi[ginger]" value="{{old('menu_yakumi.ginger',
                    "0")}}"/><br>
                    <a>三つ葉</a>
                    <input type="number" name="menu_yakumi[mitsuba]" value="{{old('menu_yakumi.mitsuba',
                    "0")}}"/><br>
                    <a>ミョウガ</a>
                    <input type="number" name="menu_yakumi[japanese_ginger]" value="{{old('menu_yakumi.japanese_ginger',
                    "0")}}"/><br>
                    <a>柚子</a>
                    <input type="number" name="menu_yakumi[yuzu]" value="{{old('menu_yakumi.yuzu',
                    "0")}}"/><br>
                    <a>わさび</a>
                    <input type="number" name="menu_yakumi[wasabi]" value="{{old('menu_yakumi.wasabi',
                    "0")}}"/><br>
                <h2>ハーブ</h2>
                    <a>パクチー</a>
                    <input type="number" name="menu_herbs[coriander]" value="{{old('menu_herbs.coriander',
                    "0")}}"/><br>
                    <a>バジル</a>
                    <input type="number" name="menu_herbs[basil]" value="{{old('menu_herbs.basil',
                    "0")}}"/><br>
                    <a>パセリ</a>
                    <input type="number" name="menu_herbs[parsley]" value="{{old('menu_herbs.parsley',
                    "0")}}"/><br>
                    <a>ルッコラ</a>
                    <input type="number" name="menu_herbs[arugula]" value="{{old('menu_herbs.arugula',
                    "0")}}"/><br>
                    <a>レモングラス</a>
                    <input type="number" name="menu_herbs[lemongrass]" value="{{old('menu_herbs.lemongrass',
                    "0")}}"/><br>
                    <a>ローズマリー</a>
                    <input type="number" name="menu_herbs[rosemary]" value="{{old('menu_herbs.rosemary',
                    "0")}}"/><br>
                <h2>オイル</h2>
                    <a>亜麻仁油</a>
                    <input type="number" name="menu_oil[flaxseed_oil]" value="{{old('menu_oil.flaxseed_oil',
                    "0")}}"/><br>
                    <a>えごま油</a>
                    <input type="number" name="menu_oil[egoma_oil]" value="{{old('menu_oil.egoma_oil',
                    "0")}}"/><br>
                    <a>オリーブオイル</a>
                    <input type="number" name="menu_oil[olive_oil]" value="{{old('menu_oil.olive_oil',
                    "0")}}"/><br>
                    <a>ココナッツオイル</a>
                    <input type="number" name="menu_oil[coconut_oil]"value="{{old('menu_oil.coconut_oil',
                    "0")}}"/><br>
                    <a>ごま油</a>
                    <input type="number" name="menu_oil[sesame_oil]" value="{{old('menu_oil.sesame_oil',
                    "0")}}"/><br>
                    <a>コーン油</a>
                    <input type="number" name="menu_oil[corn_oil]" value="{{old('menu_oil.corn_oil',
                    "0")}}"/><br>
                    <a>サラダ油</a>
                    <input type="number" name="menu_oil[salad_oil]" value="{{old('menu_oil.salad_oil',
                    "0")}}"/><br>
                    <a>菜種油</a>
                    <input type="number" name="menu_oil[rapeseed_oil]" value="{{old('menu_oil.rapeseed_oil',
                    "0")}}"/><br>
                <h2>スパイス</h2>
                    <a>ガーリック</a>
                    <input type="number" name="menu_spices[garlic_spice]" value="{{old('menu_spices.garlic_spice',
                    "0")}}"/><br>
                    <a>クミン</a>
                    <input type="number" name="menu_spices[cumin]" value="{{old('menu_spices.cumin',
                    "0")}}"/><br>
                    <a>胡椒</a>
                    <input type="number" name="menu_spices[pepper]" value="{{old('menu_spices.pepper',
                    "0")}}"/><br>
                    <a>七味</a>
                    <input type="number" name="menu_spices[shichimi]" value="{{old('menu_spices.shichimi',
                    "0")}}"/><br>
                    <a>シナモン</a>
                    <input type="number" name="menu_spices[cinnamon]" value="{{old('menu_spices.cinnamon',
                    "0")}}"/><br>
                    <a>ターメリック</a>
                    <input type="number" name="menu_spices[turmeric]" value="{{old('menu_spices.turmeric',
                    "0")}}"/><br>
                    <a>唐辛子</a>
                    <input type="number" name="menu_spices[chili]" value="{{old('menu_spices.chili',
                    "0")}}"/><br>
        </details>
        <input type="hidden" name="menu[user_id]" value="{{Auth::User()->id}}"/>
        <input type="submit" value="保存"/>
    </form>
    <a href="/food/top">戻る</a>
</body>
@endsection