@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Management Create</title>
</head>
<body>
    <h1>食材登録</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/food/management/create/{{Auth::User()->id}}" method="POST">
        @csrf
        <details>
            <summary>炭水化物（パン類・穀類・麺類）</summary>
                <h2>パン類</h2>
                    <a>食パン</a>
                    <input type="number" name="management_carbohydrates_bread[plain_bread]" value="{{old('management_carbohydrates_bread.plain_bread',
                    $management_carbohydrates_bread->plain_bread)}}"/><br>
                    <a>コッペパン</a>
                    <input type="number" name="management_carbohydrates_bread[koppe_bread]" value="{{old('management_carbohydrates_bread.koppe_bread',
                    $management_carbohydrates_bread->koppe_bread)}}"/><br>
                    <a>クロワッサン</a>
                    <input type="number" name="management_carbohydrates_bread[croissant]" value="{{old('management_carbohydrates_bread.croissant',
                    $management_carbohydrates_bread->croissant)}}"/><br>
                    <a>ロールパン</a>
                    <input type="number" name="management_carbohydrates_bread[bread_roll]" value="{{old('management_carbohydrates_bread.bread_roll',
                    $management_carbohydrates_bread->bread_roll)}}"/><br>
                    <a>ベーグル</a>
                    <input type="number" name="management_carbohydrates_bread[bagel]" value="{{old('management_carbohydrates_bread.bagel',
                    $management_carbohydrates_bread->bagel)}}"/><br>
                    <a>デニッシュ</a>
                    <input type="number" name="management_carbohydrates_bread[danish]" value="{{old('management_carbohydrates_bread.danish',
                    $management_carbohydrates_bread->danish)}}"/><br>
                    <a>スコーン</a>
                    <input type="number" name="management_carbohydrates_bread[scone]" value="{{old('management_carbohydrates_bread.scone',
                    $management_carbohydrates_bread->scone)}}"/><br>
                    <a>バゲット</a>
                    <input type="number" name="management_carbohydrates_bread[baguette]" value="{{old('management_carbohydrates_bread.baguette',
                    $management_carbohydrates_bread->baguette)}}"/><br>
                    <a>バタール</a>
                    <input type="number" name="management_carbohydrates_bread[batal]" value="{{old('management_carbohydrates_bread.batal',
                    $management_carbohydrates_bread->batal)}}"/><br>
                    <a>ナン</a>
                    <input type="number" name="management_carbohydrates_bread[naan]" value="{{old('management_carbohydrates_bread.naan',
                    $management_carbohydrates_bread->naan)}}"/><br>
                    <a>グリッシーニ</a>
                    <input type="number" name="management_carbohydrates_bread[grissini]" value="{{old('management_carbohydrates_bread.grissini',
                    $management_carbohydrates_bread->grissini)}}"/><br>
                    <a>マフィン</a>
                    <input type="number" name="management_carbohydrates_bread[muffin]" value="{{old('management_carbohydrates_bread.muffin',
                    $management_carbohydrates_bread->muffin)}}"/><br>
                <h2>穀類</h2>
                    <a>米</a>
                    <input type="number" name="management_carbohydrates_cereals[rice]" value="{{old('management_carbohydrates_cereals.rice',
                    $management_carbohydrates_cereals->rice)}}"/><br>
                    <a>玄米</a>
                    <input type="number" name="management_carbohydrates_cereals[brown_rice]" value="{{old('management_carbohydrates_cereals.brown_rice',
                    $management_carbohydrates_cereals->brown_rice)}}"/><br>
                    <a>雑穀・麦</a>
                    <input type="number" name="management_carbohydrates_cereals[millet]" value="{{old('management_carbohydrates_cereals.millet',
                    $management_carbohydrates_cereals->millet)}}"/><br>
                    <a>もち米</a>
                    <input type="number" name="management_carbohydrates_cereals[sticky_rice]" value="{{old('management_carbohydrates_cereals.sticky_rice',
                    $management_carbohydrates_cereals->sticky_rice)}}"/><br>
                    <a>餅</a>
                    <input type="number" name="management_carbohydrates_cereals[rice_cake]" value="{{old('management_carbohydrates_cereals.rice_cake',
                    $management_carbohydrates_cereals->rice_cake)}}"/><br>
                    <a>餅巾着</a>
                    <input type="number" name="management_carbohydrates_cereals[mochikinchaku]" value="{{old('management_carbohydrates_cereals.mochikinchaku',
                    $management_carbohydrates_cereals->mochikinchaku)}}"/><br>
                    <a>シリアル</a>
                    <input type="number" name="management_carbohydrates_cereals[cereal]" value="{{old('management_carbohydrates_cereals.cereal',
                    $management_carbohydrates_cereals->cereal)}}"/><br>
                <h2>麺類</h2>
                    <a>うどん</a>
                    <input type="number" name="management_carbohydrates_noodles[udon]" value="{{old('management_carbohydrates_noodles.udon',
                    $management_carbohydrates_noodles->udon)}}"/><br>
                    <a>そうめん</a>
                    <input type="number" name="management_carbohydrates_noodles[somen]" value="{{old('management_carbohydrates_noodles.somen',
                    $management_carbohydrates_noodles->somen)}}"/><br>
                    <a>そば</a>
                    <input type="number" name="management_carbohydrates_noodles[soba]" value="{{old('management_carbohydrates_noodles.soba',
                    $management_carbohydrates_noodles->soba)}}"/><br>
                    <a>パスタ</a>
                    <input type="number" name="management_carbohydrates_noodles[pasta]" value="{{old('management_carbohydrates_noodles.pasta',
                    $management_carbohydrates_noodles->pasta)}}"/><br>
                    <a>ラーメン</a>
                    <input type="number" name="management_carbohydrates_noodles[ramen]" value="{{old('management_carbohydrates_noodles.ramen',
                    $management_carbohydrates_noodles->ramen)}}"/><br>
                    <a>焼きそば</a>
                    <input type="number" name="management_carbohydrates_noodles[fried_noodle]" value="{{old('management_carbohydrates_noodles.fried_noodle',
                    $management_carbohydrates_noodles->fried_noodle)}}"/><br>
                    <a>つけ麺</a>
                    <input type="number" name="management_carbohydrates_noodles[tsukemen]" value="{{old('management_carbohydrates_noodles.tsukemen',
                    $management_carbohydrates_noodles->tsukemen)}}"/><br>
                    <a>冷や麦</a>
                    <input type="number" name="management_carbohydrates_noodles[hiyamugi]" value="{{old('management_carbohydrates_noodles.hiyamugi',
                    $management_carbohydrates_noodles->hiyamugi)}}"/><br>
                    <a>冷麺</a>
                    <input type="number" name="management_carbohydrates_noodles[cold_noodle]" value="{{old('management_carbohydrates_noodles.cold_noodle',
                    $management_carbohydrates_noodles->cold_noodle)}}"/><br>
        </details>
        <details>
            <summary>野菜類</summary>
                    <a>アスパラガス</a>
                    <input type="number" name="management_vegetable[asparagus]" value="{{old('management_vegetable.asparagus',
                    $management_vegetable->asparagus)}}"/><br>
                    <a>かぼちゃ</a>
                    <input type="number" name="management_vegetable[pumpkin]" value="{{old('management_vegetable.pumpkin',
                    $management_vegetable->pumpkin)}}"/><br>
                    <a>キャベツ</a>
                    <input type="number" name="management_vegetable[cabbage]" value="{{old('management_vegetable.cabbage',
                    $management_vegetable->cabbage)}}"/><br>
                    <a>ごぼう</a>
                    <input type="number" name="management_vegetable[burdock]" value="{{old('management_vegetable.burdock',
                    $management_vegetable->burdock)}}"/><br>
                    <a>サツマイモ</a>
                    <input type="number" name="management_vegetable[satsumaimo]" value="{{old('management_vegetable.satsumaimo',
                    $management_vegetable->satsumaimo)}}"/><br>
                    <a>山菜</a>
                    <input type="number" name="management_vegetable[sansai]" value="{{old('management_vegetable.sansai',
                    $management_vegetable->sansai)}}"/><br>
                    <a>じゃがいも</a>
                    <input type="number" name="management_vegetable[potato]" value="{{old('management_vegetable.potato',
                    $management_vegetable->potato)}}"/><br>
                    <a>春菊</a>
                    <input type="number" name="management_vegetable[crowndaisy]" value="{{old('management_vegetable.crowndaisy',
                    $management_vegetable->crowndaisy)}}"/><br>
                    <a>しょうが</a>
                    <input type="number" name="management_vegetable[garlic]" value="{{old('management_vegetable.garlic',
                    $management_vegetable->garlic)}}"/><br>
                    <a>セロリ</a>
                    <input type="number" name="management_vegetable[celery]" value="{{old('management_vegetable.celery',
                    $management_vegetable->celery)}}"/><br>
                    <a>大根</a>
                    <input type="number" name="management_vegetable[daikon]" value="{{old('management_vegetable.daikon',
                    $management_vegetable->daikon)}}"/><br>
                    <a>たけのこ</a>
                    <input type="number" name="management_vegetable[banboo_shoots]" value="{{old('management_vegetable.banboo_shoots',
                    $management_vegetable->banboo_shoots)}}"/><br>
                    <a>たまねぎ</a>
                    <input type="number" name="management_vegetable[onion]" value="{{old('management_vegetable.onion',
                    $management_vegetable->onion)}}"/><br>
                    <a>豆苗</a>
                    <input type="number" name="management_vegetable[been_seedlings]" value="{{old('management_vegetable.been_seedlings',
                    $management_vegetable->been_seedlings)}}"/><br>
                    <a>とうもろこし</a>
                    <input type="number" name="management_vegetable[corn]" value="{{old('management_vegetable.corn',
                    $management_vegetable->corn)}}"/><br>
                    <a>トマト</a>
                    <input type="number" name="management_vegetable[tomato]" value="{{old('management_vegetable.tomato',
                    $management_vegetable->tomato)}}"/><br>
                    <a>なす</a>
                    <input type="number" name="management_vegetable[eggplant]" value="{{old('management_vegetable.eggplant',
                    $management_vegetable->eggplant)}}"/><br>
                    <a>にんじん</a>
                    <input type="number" name="management_vegetable[carrot]" value="{{old('management_vegetable.carrot',
                    $management_vegetable->carrot)}}"/><br>
                    <a>ネギ</a>
                    <input type="number" name="management_vegetable[green_onion]" value="{{old('management_vegetable.green_onion',
                    $management_vegetable->green_onion)}}"/><br>
                    <a>白菜</a>
                    <input type="number" name="management_vegetable[chinese_cabbage]" value="{{old('management_vegetable.chinese_cabbage',
                    $management_vegetable->chinese_cabbage)}}"/><br>
                    <a>ピーマン</a>
                    <input type="number" name="management_vegetable[green_pepper]" value="{{old('management_vegetable.green_pepper',
                    $management_vegetable->green_pepper)}}"/><br>
                    <a>ブロッコリー</a>
                    <input type="number" name="management_vegetable[broccoli]" value="{{old('management_vegetable.broccoli',
                    $management_vegetable->broccoli)}}"/><br>
                    <a>らっきょう</a>
                    <input type="number" name="management_vegetable[rakkyo]" value="{{old('management_vegetable.rakkyo',
                    $management_vegetable->rakkyo)}}"/><br>
                    <a>レタス</a>
                    <input type="number" name="management_vegetable[lettuce]" value="{{old('management_vegetable.lettuce',
                    $management_vegetable->lettuce)}}"/><br>
                    <a>レンコン</a>
                    <input type="number" name="management_vegetable[lotus_root]" value="{{old('management_vegetable.banboo_shoots',
                    $management_vegetable->lotus_root)}}"/><br>
                <h2>キノコ類</h2>
                    <a>エノキタケ（赤）</a>
                    <input type="number" name="management_mushroom[enokitake_red]" value="{{old('management_mushroom.enokitake_red',
                    $management_mushroom->enokitake_red)}}"/><br>
                    <a>エノキタケ（茶）</a>
                    <input type="number" name="management_mushroom[enokitake_brown]" value="{{old('management_mushroom.enokitake_brown',
                    $management_mushroom->enokitake_brown)}}"/><br>
                    <a>ブナシメジ（茶）</a>
                    <input type="number" name="management_mushroom[bunashimeji_brown]" value="{{old('management_mushroom.bunashimeji_brown',
                    $management_mushroom->bunashimeji_brown)}}"/><br>
                    <a>ブナシメジ（白）</a>
                    <input type="number" name="management_mushroom[bunashimeji_white]" value="{{old('management_mushroom.bunashimeji_white',
                    $management_mushroom->bunashimeji_white)}}"/><br>
                    <a>シイタケ</a>
                    <input type="number" name="management_mushroom[shitake]" value="{{old('management_mushroom.shitake',
                    $management_mushroom->shitake)}}"/><br>
                    <a>エリンギ</a>
                    <input type="number" name="management_mushroom[king_trumpet]" value="{{old('management_mushroom.king_trumpet',
                    $management_mushroom->king_trumpet)}}"/><br>
                    <a>マイタケ</a>
                    <input type="number" name="management_mushroom[maitake]" value="{{old('management_mushroom.maitake',
                    $management_mushroom->maitake)}}"/><br>
                    <a>白マイタケ</a>
                    <input type="number" name="management_mushroom[maitake_white]" value="{{old('management_mushroom.maitake_white',
                    $management_mushroom->maitake_white)}}"/><br>
                    <a>なめこ</a>
                    <input type="number" name="management_mushroom[nameko]" value="{{old('management_mushroom.nameko',
                    $management_mushroom->nameko)}}"/><br>
                    <a>マッシュルーム</a>
                    <input type="number" name="management_mushroom[mushroom]" value="{{old('management_mushroom.mushroom',
                    $management_mushroom->mushroom)}}"/><br>
                    <a>ヒラタケ</a>
                    <input type="number" name="management_mushroom[oyster_mushroom]" value="{{old('management_mushroom.oyster_mushroom',
                    $management_mushroom->oyster_mushroom)}}"/><br>
                <h2>豆類</h2>
                    <a>枝豆</a>
                    <input type="number" name="management_bean[edamame]" value="{{old('management_bean.edamame',
                    $management_bean->edamame)}}"/><br>
                    <a>大豆</a>
                    <input type="number" name="management_bean[soybean]" value="{{old('management_bean.soybean',
                    $management_bean->soybean)}}"/><br>
                    <a>グリーンピース</a>
                    <input type="number" name="management_bean[greenpeace]" value="{{old('management_bean.greenpeace',
                    $management_bean->greenpeace)}}"/><br>
                    <a>そら豆</a>
                    <input type="number" name="management_bean[broad_bean]" value="{{old('management_bean.broad_bean',
                    $management_bean->broad_bean)}}"/><br>
                    <a>落花生</a>
                    <input type="number" name="management_bean[peanut]" value="{{old('management_bean.peanut',
                    $management_bean->peanut)}}"/><br>
                    <a>エンドウ豆</a>
                    <input type="number" name="management_bean[endomame]" value="{{old('management_bean.edamame',
                    $management_bean->endomame)}}"/><br>
                    <a>インゲン豆</a>
                    <input type="number" name="management_bean[green_bean]" value="{{old('management_bean.green_bean',
                    $management_bean->green_bean)}}"/><br>
        </details>
        <details>
            <summary>魚介類</summary>
                    <a>アジ</a>
                    <input type="number" name="management_marine_products[horse_mackerel]" value="{{old('management_marine_products.horse_mackerel',
                    $management_marine_products->horse_mackerel)}}"/><br>
                    <a>アナゴ</a>
                    <input type="number" name="management_marine_products[anago]" value="{{old('management_marine_products.anago',
                    $management_marine_products->anago)}}"/><br>
                    <a>イカ</a>
                    <input type="number" name="management_marine_products[squid]" value="{{old('management_marine_products.squid',
                    $management_marine_products->squid)}}"/><br>
                    <a>いくら</a>
                    <input type="number" name="management_marine_products[ikura]" value="{{old('management_marine_products.ikura',
                    $management_marine_products->ikura)}}"/><br>
                    <a>イワシ</a>
                    <input type="number" name="management_marine_products[sardine]" value="{{old('management_marine_products.sardine',
                    $management_marine_products->sardine)}}"/><br>
                    <a>ウナギ</a>
                    <input type="number" name="management_marine_products[unagi]" value="{{old('management_marine_products.unagi',
                    $management_marine_products->unagi)}}"/><br>
                    <a>ウニ</a>
                    <input type="number" name="management_marine_products[sea_urchin]" value="{{old('management_marine_products.sea_urchin',
                    $management_marine_products->sea_urchin)}}"/><br>
                    <a>かずのこ</a>
                    <input type="number" name="management_marine_products[herring_roe]" value="{{old('management_marine_products.herring_roe',
                    $management_marine_products->herring_roe)}}"/><br>
                    <a>カツオ</a>
                    <input type="number" name="management_marine_products[skipjack]" value="{{old('management_marine_products.skipjack',
                    $management_marine_products->skipjack)}}"/><br>
                    <a>カニ</a>
                    <input type="number" name="management_marine_products[crab]" value="{{old('management_marine_products.crab',
                    $management_marine_products->crab)}}"/><br>
                    <a>サーモン</a>
                    <input type="number" name="management_marine_products[salmon]" value="{{old('management_marine_products.salmon',
                    $management_marine_products->salmon)}}"/><br>
                    <a>サバ</a>
                    <input type="number" name="management_marine_products[mackerel]" value="{{old('management_marine_products.mackerel',
                    $management_marine_products->mackerel)}}"/><br>
                    <a>サンマ</a>
                    <input type="number" name="management_marine_products[pacific_saury]" value="{{old('management_marine_products.pacific_saury',
                    $management_marine_products->pacific_saury)}}"/><br>
                    <a>シシャモ</a>
                    <input type="number" name="management_marine_products[shishamo]" value="{{old('management_marine_products.shishamo',
                    $management_marine_products->shishamo)}}"/><br>
                    <a>シラス</a>
                    <input type="number" name="management_marine_products[shirasu]" value="{{old('management_marine_products.shirasu',
                    $management_marine_products->shirasu)}}"/><br>
                    <a>すじこ</a>
                    <input type="number" name="management_marine_products[sujiko]" value="{{old('management_marine_products.sujiko',
                    $management_marine_products->sujiko)}}"/><br>
                    <a>タイ</a>
                    <input type="number" name="management_marine_products[sea_bream]" value="{{old('management_marine_products.sea_bream',
                    $management_marine_products->sea_bream)}}"/><br>
                    <a>タコ</a>
                    <input type="number" name="management_marine_products[octopus]" value="{{old('management_marine_products.octopus',
                    $management_marine_products->octopus)}}"/><br>
                    <a>タラ</a>
                    <input type="number" name="management_marine_products[cod]" value="{{old('management_marine_products.cod',
                    $management_marine_products->cod)}}"/><br>
                    <a>たらこ</a>
                    <input type="number" name="management_marine_products[tarako]" value="{{old('management_marine_products.tarako',
                    $management_marine_products->tarako)}}"/><br>
                    <a>ちりめんじゃこ</a>
                    <input type="number" name="management_marine_products[chirimen]" value="{{old('management_marine_products.chirimen',
                    $management_marine_products->chirimen)}}"/><br>
                    <a>フグ</a>
                    <input type="number" name="management_marine_products[puffer_fish]" value="{{old('management_marine_products.puffer_fish',
                    $management_marine_products->puffer_fish)}}"/><br>
                    <a>ホッケ</a>
                    <input type="number" name="management_marine_products[hokke]" value="{{old('management_marine_products.hokke',
                    $management_marine_products->hokke)}}"/><br>
                    <a>マグロ</a>
                    <input type="number" name="management_marine_products[tuna]" value="{{old('management_marine_products.tuna',
                    $management_marine_products->tuna)}}"/><br>
                    <a>明太子</a>
                    <input type="number" name="management_marine_products[mentaiko]" value="{{old('management_marine_products.mentaiko',
                    $management_marine_products->mentaiko)}}"/><br>
                <h2>エビ類</h2>
                    <a>エビ（バナメイエビ）</a>
                    <input type="number" name="management_shrimp[whiteleg_shrimp]" value="{{old('management_shrimp.whiteleg_shrimp',
                    $management_shrimp->whiteleg_shrimp)}}"/><br>
                    <a>赤エビ</a>
                    <input type="number" name="management_shrimp[red_shrimp]" value="{{old('management_shrimp.red_shrimp',
                    $management_shrimp->red_shrimp)}}"/><br>
                    <a>ブラックタイガー</a>
                    <input type="number" name="management_shrimp[black_tiger_shrimp]" value="{{old('management_shrimp.black_tiger_shrimp',
                    $management_shrimp->black_tiger_shrimp)}}"/><br>
                    <a>クルマエビ</a>
                    <input type="number" name="management_shrimp[kurumaebi]" value="{{old('management_shrimp.kurumaebi',
                    $management_shrimp->kurumaebi)}}"/><br>
                    <a>ボタンエビ</a>
                    <input type="number" name="management_shrimp[button_shrimp]" value="{{old('management_shrimp.button_shrimp',
                    $management_shrimp->button_shrimp)}}"/><br>
                    <a>甘エビ</a>
                    <input type="number" name="management_shrimp[sweet_shrimp]" value="{{old('management_shrimp.sweet_shrimp',
                    $management_shrimp->sweet_shrimp)}}"/><br>
                    <a>芝エビ</a>
                    <input type="number" name="management_shrimp[shiba_shrimp]" value="{{old('management_shrimp.shiba_shrimp',
                    $management_shrimp->shiba_shrimp)}}"/><br>
                    <a>桜エビ</a>
                    <input type="number" name="management_shrimp[sakura_shrimp]" value="{{old('management_shrimp.sakura_shrimp',
                    $management_shrimp->sakura_shrimp)}}"/><br>
                    <a>伊勢エビ</a>
                    <input type="number" name="management_shrimp[spiny_lobster]" value="{{old('management_shrimp.spiny_lobster',
                    $management_shrimp->spiny_lobster)}}"/><br>
                    <a>ロブスター</a>
                    <input type="number" name="management_shrimp[lobster]" value="{{old('management_shrimp.lobster',
                    $management_shrimp->lobster)}}"/><br>
                <h2>海藻類</h2>
                    <a>生メカブ</a>
                    <input type="number" name="management_seaweed[namamekabu]" value="{{old('management_seaweed.namamekabu',
                    $management_seaweed->namamekabu)}}"/><br>
                    <a>生モズク</a>
                    <input type="number" name="management_seaweed[namamozuku]" value="{{old('management_seaweed.namamozuku',
                    $management_seaweed->namamozuku)}}"/><br>
                    <a>生ワカメ</a>
                    <input type="number" name="management_seaweed[namawakame]" value="{{old('management_seaweed.namawakame',
                    $management_seaweed->namawakame)}}"/><br>
                <h2>貝類</h2>
                    <a>アサリ</a>
                    <input type="number" name="management_shellfish[asari]" value="{{old('management_shellfish.asari',
                    $management_shellfish->asari)}}"/><br>
                    <a>牡蠣</a>
                    <input type="number" name="management_shellfish[oyster]" value="{{old('management_shellfish.oyster',
                    $management_shellfish->oyster)}}"/><br>
                    <a>シジミ</a>
                    <input type="number" name="management_shellfish[shijimi]" value="{{old('management_shellfish.shijimi',
                    $management_shellfish->shijimi)}}"/><br>
                    <a>ハマグリ</a>
                    <input type="number" name="management_shellfish[hamaguri]" value="{{old('management_shellfish.hamaguri',
                    $management_shellfish->hamaguri)}}"/><br>
                    <a>ホタテ</a>
                    <input type="number" name="management_shellfish[scallop]" value="{{old('management_shellfish.scallop',
                    $management_shellfish->scallop)}}"/><br>
                    <a>ホンビノス貝</a>
                    <input type="number" name="management_shellfish[hard_clam]" value="{{old('management_shellfish.hard_clam',
                    $management_shellfish->hard_clam)}}"/><br>
        </details>
        <details>
            <summary>肉類</summary>
                <h2>牛肉</h2>
                    <a>挽肉</a>
                    <input type="number" name="management_beef[beef_minced]" value="{{old('management_beef.beef_minced',
                    $management_beef->beef_minced)}}"/><br>
                    <a>肩</a>
                    <input type="number" name="management_beef[beef_shoulder]" value="{{old('management_beef.beef_shoulder',
                    $management_beef->beef_shoulder)}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="management_beef[beef_boston_butt]" value="{{old('management_beef.beef_boston_butt',
                    $management_beef->beef_boston_butt)}}"/><br>
                    <a>リブロース</a>
                    <input type="number" name="management_beef[beef_ribulose]" value="{{old('management_beef.beef_ribulose',
                    $management_beef->beef_ribulose)}}"/><br>
                    <a>サーロイン</a>
                    <input type="number" name="management_beef[beef_sirloin]" value="{{old('management_beef.beef_sirloin',
                    $management_beef->beef_sirloin)}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" name="management_beef[beef_fillet]" value="{{old('management_beef.beef_fillet',
                    $management_beef->beef_fillet)}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="management_beef[beef_ribs]" value="{{old('management_beef.beef_ribs',
                    $management_beef->beef_ribs)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="management_beef[beef_thigh]" value="{{old('management_beef.beef_thigh',
                    $management_beef->beef_thigh)}}"/><br>
                    <a>ランプ</a>
                    <input type="number" name="management_beef[beef_rump]" value="{{old('management_beef.beef_rump',
                    $management_beef->beef_rump)}}"/><br>
                    <a>スネ</a>
                    <input type="number" name="management_beef[beef_shin]" value="{{old('management_beef.beef_shin',
                    $management_beef->beef_shin)}}"/><br>
                    <a>ネック</a>
                    <input type="number" name="management_beef[beef_neck]" value="{{old('management_beef.beef_neck',
                    $management_beef->beef_neck)}}"/><br>
                <h2>豚肉</h2>
                    <a>挽肉</a>
                    <input type="number" name="management_pork[pork_minced]" value="{{old('management_pork.pork_minced',
                    $management_pork->pork_minced)}}"/><br>
                    <a>肩</a>
                    <input type="number" name="management_pork[pork_shoulder]" value="{{old('management_pork.pork_shoulder',
                    $management_pork->pork_shoulder)}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="management_pork[pork_boston_butt]" value="{{old('management_pork.pork_boston_butt',
                    $management_pork->pork_boston_butt)}}"/><br>
                    <a>ロース</a>
                    <input type="number" name="management_pork[pork_lose]" value="{{old('management_pork.pork_lose',
                    $management_pork->pork_lose)}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" name="management_pork[pork_fillet]" value="{{old('management_pork.pork_fillet',
                    $management_pork->pork_fillet)}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="management_pork[pork_ribs]" value="{{old('management_pork.pork_ribs',
                    $management_pork->pork_ribs)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="management_pork[pork_thigh]" value="{{old('management_pork.pork_thigh',
                    $management_pork->pork_thigh)}}"/><br>
                <h2>鶏肉</h2>
                    <a>ムネ</a>
                    <input type="number" name="management_chicken[chicken_breast]" value="{{old('management_chicken.chicken_breast',
                    $management_chicken->chicken_breast)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="management_chicken[chicken_thigh]" value="{{old('management_chicken.chicken_thigh',
                    $management_chicken->chicken_thigh)}}"/><br>
                    <a>ササミ</a>
                    <input type="number" name="management_chicken[chicken_scissor]" value="{{old('management_chicken.chicken_scissor',
                    $management_chicken->chicken_scissor)}}"/><br>
                    <a>ハツ</a>
                    <input type="number" name="management_chicken[chicken_heart]" value="{{old('management_chicken.chicken_heart',
                    $management_chicken->chicken_heart)}}"/><br>
                    <a>レバー</a>
                    <input type="number" name="management_chicken[chicken_lever]" value="{{old('management_chicken.chicken_lever',
                    $management_chicken->chicken_lever)}}"/><br>
                    <a>砂肝</a>
                    <input type="number" name="management_chicken[chicken_sand]" value="{{old('management_chicken.chicken_sand',
                    $management_chicken->chicken_sand)}}"/><br>
                    <a>手羽</a>
                    <input type="number" name="management_chicken[chicken_wing]" value="{{old('management_chicken.chicken_wing',
                    $management_chicken->chicken_wing)}}"/><br>
                    <a>首皮</a>
                    <input type="number" name="management_chicken[chicken_neck_skin]" value="{{old('management_chicken.chicken_neck_skin',
                    $management_chicken->chicken_neck_skin)}}"/><br>
                    <a>ヤゲン軟骨</a>
                    <input type="number" name="management_chicken[chicken_cartilage]" value="{{old('management_chicken.chicken_cartilage',
                    $management_chicken->chicken_cartilage)}}"/><br>
                    <a>テール</a>
                    <input type="number" name="management_chicken[chicken_tail]" value="{{old('management_chicken.chicken_tail',
                    $management_chicken->chicken_tail)}}"/><br>
                <h2>羊肉</h2>
                    <a>ロース</a>
                    <input type="number" name="management_mutton[mutton_lose]" value="{{old('management_mutton.mutton_lose',
                    $management_mutton->mutton_lose)}}"/><br>
                    <a>肩</a>
                    <input type="number" name="management_mutton[mutton_shoulder]" value="{{old('management_mutton.mutton_shoulder',
                    $management_mutton->mutton_shoulder)}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="management_mutton[mutton_boston_butt]" value="{{old('management_mutton.mutton_boston_butt',
                    $management_mutton->mutton_boston_butt)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="management_mutton[mutton_thigh]" value="{{old('management_mutton.mutton_thigh',
                    $management_mutton->mutton_thigh)}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="management_mutton[mutton_ribs]" value="{{old('management_mutton.mutton_ribs',
                    $management_mutton->mutton_ribs)}}"/><br>
                <h2>その他肉類</h2>
                    <a>カモ肉</a>
                    <input type="number" name="management_other_meat[duck_meat]" value="{{old('management_other_meat.duck_meat',
                    $management_other_meat->duck_meat)}}"/><br>
                    <a>シカ肉</a>
                    <input type="number" name="management_other_meat[venison]" value="{{old('management_other_meat.venison',
                    $management_other_meat->venison)}}"/><br>
                    <a>七面鳥</a>
                    <input type="number" name="management_other_meat[turckey]" value="{{old('management_other_meat.turckey',
                    $management_other_meat->turckey)}}"/><br>
                    <a>ベーコン</a>
                    <input type="number" name="management_other_meat[bacon]" value="{{old('management_other_meat.bacon',
                    $management_other_meat->bacon)}}"/><br>
                    <a>ハム</a>
                    <input type="number" name="management_other_meat[ham]" value="{{old('management_other_meat.ham',
                    $management_other_meat->ham)}}"/><br>
                    <a>ソーセージ</a>
                    <input type="number" name="management_other_meat[sausage]" value="{{old('management_other_meat.sausage',
                    $management_other_meat->sausage)}}"/><br>
        </details>
        <details>
            <summary>卵・チーズ・乳製品</summary>
                    <a>ヨーグルト</a>
                    <input type="number" name="management_eggmilk[yogurt]" value="{{old('management_eggmilk.yogurt',
                    $management_eggmilk->yogurt)}}"/><br>
                    <a>牛乳</a>
                    <input type="number" name="management_eggmilk[milk]" value="{{old('management_eggmilk.milk',
                    $management_eggmilk->milk)}}"/><br>
                    <a>生クリーム</a>
                    <input type="number" name="management_eggmilk[fresh_cream]" value="{{old('management_eggmilk.fresh_cream',
                    $management_eggmilk->fresh_cream)}}"/><br>
                    <a>バター</a>
                    <input type="number" name="management_eggmilk[butter]" value="{{old('management_eggmilk.butter',
                    $management_eggmilk->butter)}}"/><br>
                    <a>マーガリン</a>
                    <input type="number" name="management_eggmilk[margarine]" value="{{old('management_eggmilk.margarine',
                    $management_eggmilk->margarine)}}"/><br>
                    <a>卵</a>
                    <input type="number" name="management_eggmilk[egg]" value="{{old('management_eggmilk.egg',
                    $management_eggmilk->egg)}}"/><br>
                    <a>ウズラ卵</a>
                    <input type="number" name="management_eggmilk[quail_egg]" value="{{old('management_eggmilk.quail_egg',
                    $management_eggmilk->quail_egg)}}"/><br>
                    <a>ピータン</a>
                    <input type="number" name="management_eggmilk[century_egg]" value="{{old('management_eggmilk.century_egg',
                    $management_eggmilk->century_egg)}}"/><br>
                    <a>温泉卵</a>
                    <input type="number" name="management_eggmilk[hot_spring_egg]" value="{{old('management_eggmilk.hot_spring_egg',
                    $management_eggmilk->hot_spring_egg)}}"/><br>
                    <a>燻製卵</a>
                    <input type="number" name="management_eggmilk[smoked_egg]" value="{{old('management_eggmilk.smoked_egg',
                    $management_eggmilk->smoked_egg)}}"/><br>
                <h2>チーズ類</h2>
                    <a>カマンベール</a>
                    <input type="number" name="management_cheese[camembert_cheese]" value="{{old('management_cheese.camembert_cheese',
                    $management_cheese->camembert_cheese)}}"/><br>
                    <a>クリーム</a>
                    <input type="number" name="management_cheese[cream_cheese]" value="{{old('management_cheese.cream_cheese',
                    $management_cheese->cream_cheese)}}"/><br>
                    <a>ゴルゴンゾーラ</a>
                    <input type="number" name="management_cheese[gorgonzola_cheese]" value="{{old('management_cheese.gorgonzola_cheese',
                    $management_cheese->gorgonzola_cheese)}}"/><br>
                    <a>ゴーダ</a>
                    <input type="number" name="management_cheese[gouda_cheese]" value="{{old('management_cheese.gouda_cheese',
                    $management_cheese->gouda_cheese)}}"/><br>
                    <a>チェダー</a>
                    <input type="number" name="management_cheese[cheddar_cheese]" value="{{old('management_cheese.cheddar_cheese',
                    $management_cheese->cheddar_cheese)}}"/><br>
                    <a>マスカルポーネ</a>
                    <input type="number" name="management_cheese[mascarpone_cheese]" value="{{old('management_cheese.mascarpone_cheese',
                    $management_cheese->mascarpone_cheese)}}"/><br>
                    <a>モッツァレラ</a>
                    <input type="number" name="management_cheese[mozzarella_cheese]" value="{{old('management_cheese.mozzarella_cheese',
                    $management_cheese->mozzarella_cheese)}}"/><br>
        </details>
        <details>
            <summary>果物類</summary>
                <a>あんず</a>
                <input type="number" name="management_fruits[apricot]" value="{{old('management_fruits.apricot',
                $management_fruits->apricot)}}"/><br>
                <a>イチゴ</a>
                <input type="number" name="management_fruits[strawberry]" value="{{old('management_fruits.strawberry',
                $management_fruits->strawberry)}}"/><br>
                <a>イチジク</a>
                <input type="number" name="management_fruits[fig]" value="{{old('management_fruits.fig',
                $management_fruits->fig)}}"/>
                <a>梅</a>
                <input type="number" name="management_fruits[plum]" value="{{old('management_fruits.plum',
                $management_fruits->plum)}}"/><br>
                <a>オレンジ</a>
                <input type="number" name="management_fruits[orange]" value="{{old('management_fruits.orange',
                $management_fruits->orange)}}"/><br>
                <a>柿</a>
                <input type="number" name="management_fruits[persimmon]" value="{{old('management_fruits.persimmon',
                $management_fruits->persimmon)}}"/><br>
                <a>キウイフルーツ</a>
                <input type="number" name="management_fruits[kiwifruit]" value="{{old('management_fruits.kiwifruit',
                $management_fruits->kiwifruit)}}"/><br>
                <a>栗</a>
                <input type="number" name="management_fruits[chestnut]" value="{{old('management_fruits.chestnut',
                $management_fruits->chestnut)}}"/><br>
                <a>グレープフルーツ</a>
                <input type="number" name="management_fruits[grapefruit]" value="{{old('management_fruits.grapefruit',
                $management_fruits->grapefruit)}}"/><br>
                <a>サクランボ</a>
                <input type="number" name="management_fruits[cherry]" value="{{old('management_fruits.cherry',
                $management_fruits->cherry)}}"/><br>
                <a>ザクロ</a>
                <input type="number" name="management_fruits[pomegranate]" value="{{old('management_fruits.pomegranate',
                $management_fruits->pomegranate)}}"/><br>
                <a>スイカ</a>
                <input type="number" name="management_fruits[watermelon]" value="{{old('management_fruits.watermelon',
                $management_fruits->watermelon)}}"/><br>
                <a>ナシ</a>
                <input type="number" name="management_fruits[japanese_pear]" value="{{old('management_fruits.japanese_pear',
                $management_fruits->japanese_pear)}}"/><br>
                <a>洋ナシ</a>
                <input type="number" name="management_fruits[pear]" value="{{old('management_fruits.pear',
                $management_fruits->pear)}}"/><br>
                <a>パイナップル</a>
                <input type="number" name="management_fruits[pineapple]" value="{{old('management_fruits.pineapple',
                $management_fruits->pineapple)}}"/><br>
                <a>バナナ</a>
                <input type="number" name="management_fruits[banana]" value="{{old('management_fruits.banana',
                $management_fruits->banana)}}"/><br>
                <a>ビワ</a>
                <input type="number" name="management_fruits[loquat]" value="{{old('management_fruits.loquat',
                $management_fruits->loquat)}}"/><br>
                <a>ブドウ</a>
                <input type="number" name="management_fruits[grape]" value="{{old('management_fruits.grape',
                $management_fruits->grape)}}"/><br>
                <a>ブルーベリー</a>
                <input type="number" name="management_fruits[blueberry]" value="{{old('management_fruits.blueberry',
                $management_fruits->blueberry)}}"/><br>
                <a>その他ベリー類</a>
                <input type="number" name="management_fruits[other_berries]" value="{{old('management_fruits.other_berries',
                $management_fruits->other_berries)}}"/><br>
                <a>マンゴー</a>
                <input type="number" name="management_fruits[mango]" value="{{old('management_fruits.mango',
                $management_fruits->mango)}}"/><br>
                <a>ミカン</a>
                <input type="number" name="management_fruits[mikan]" value="{{old('management_fruits.mikan',
                $management_fruits->mikan)}}"/><br>
                <a>メロン</a>
                <input type="number" name="management_fruits[melon]" value="{{old('management_fruits.melon',
                $management_fruits->melon)}}"/><br>
                <a>モモ</a>
                <input type="number" name="management_fruits[peach]" value="{{old('management_fruits.peach',
                $management_fruits->peach)}}"/><br>
                <a>リンゴ</a>
                <input type="number" name="management_fruits[apple]" value="{{old('management_fruits.apple',
                $management_fruits->apple)}}"/><br>
                <a>レモン</a>
                <input type="number" name="management_fruits[lemon]" value="{{old('management_fruits.lemon',
                $management_fruits->lemon)}}"/><br>
        </details>
        <details>
            <summary>漬物・豆腐・納豆</summary>
                <a>厚揚げ</a>
                <input type="number" name="management_tohunattopickles[atsuage]" value="{{old('management_tohunattopickles.atsuage',
                $management_tohunattopickles->atsuage)}}"/><br>
                <a>油揚げ</a>
                <input type="number" name="management_tohunattopickles[fried_tohu]" value="{{old('management_tohunattopickles.fried_tohu',
                $management_tohunattopickles->fried_tohu)}}"/><br>
                <a>梅干し</a>
                <input type="number" name="management_tohunattopickles[salted_plum]" value="{{old('management_tohunattopickles.salted_plum',
                $management_tohunattopickles->salted_plum)}}"/><br>
                <a>キムチ</a>
                <input type="number" name="management_tohunattopickles[kimchi]" value="{{old('management_tohunattopickles.kimchi',
                $management_tohunattopickles->kimchi)}}"/><br>
                <a>こんにゃく</a>
                <input type="number" name="management_tohunattopickles[konjac]" value="{{old('management_tohunattopickles.konjac',
                $management_tohunattopickles->konjac)}}"/><br>
                <a>ザーサイ</a>
                <input type="number" name="management_tohunattopickles[zha_cai]" value="{{old('management_tohunattopickles.zha_cai',
                $management_tohunattopickles->zha_cai)}}"/><br>
                <a>白滝</a>
                <input type="number" name="management_tohunattopickles[shirataki]" value="{{old('management_tohunattopickles.shirataki',
                $management_tohunattopickles->shirataki)}}"/><br>
                <a>たくあん</a>
                <input type="number" name="management_tohunattopickles[pickled_radish]" value="{{old('management_tohunattopickles.pickled_radish',
                $management_tohunattopickles->pickled_radish)}}"/><br>
                <a>佃煮</a>
                <input type="number" name="management_tohunattopickles[tsukudani]" value="{{old('management_tohunattopickles.tsukudani',
                $management_tohunattopickles->tsukudani)}}"/><br>
                <a>豆腐</a>
                <input type="number" name="management_tohunattopickles[tohu]" value="{{old('management_tohunattopickles.tohu',
                $management_tohunattopickles->tohu)}}"/><br>
                <a>豆腐よう</a>
                <input type="number" name="management_tohunattopickles[tohuyou]" value="{{old('management_tohunattopickles.tohuyou',
                $management_tohunattopickles->tohuyou)}}"/><br>
                <a>納豆</a>
                <input type="number" name="management_tohunattopickles[natto]" value="{{old('management_tohunattopickles.natto',
                $management_tohunattopickles->natto)}}"/><br>
                <a>生湯葉</a>
                <input type="number" name="management_tohunattopickles[namayuba]" value="{{old('management_tohunattopickles.namayuba',
                $management_tohunattopickles->namayuba)}}"/><br>
                <a>メンマ</a>
                <input type="number" name="management_tohunattopickles[menma]" value="{{old('management_tohunattopickles.menma',
                $management_tohunattopickles->menma)}}"/><br>
        </details>
        <details>
            <summary>練り物類</summary>
                <a>かまぼこ</a>
                <input type="number" name="management_kneaded_material[kamaboko]" value="{{old('management_kneaded_material.kamaboko',
                $management_kneaded_material->kamaboko)}}"/><br>
                <a>伊達巻き</a>
                <input type="number" name="management_kneaded_material[datemaki]" value="{{old('management_kneaded_material.datemaki',
                $management_kneaded_material->datemaki)}}"/><br>
                <a>つみれ</a>
                <input type="number" name="management_kneaded_material[tsumire]" value="{{old('management_kneaded_material.tsumire',
                $management_kneaded_material->tsumire)}}"/><br>
                <a>生ちくわ</a>
                <input type="number" name="management_kneaded_material[namachikuwa]" value="{{old('management_kneaded_material.namachikuwa',
                $management_kneaded_material->namachikuwa)}}"/><br>
                <a>はんぺん</a>
                <input type="number" name="management_kneaded_material[hanpen]" value="{{old('management_kneaded_material.hanpen',
                $management_kneaded_material->hanpen)}}"/><br>
                <a>焼きちくわ</a>
                <input type="number" name="management_kneaded_material[yakichikuwa]" value="{{old('management_kneaded_material.yakichikuwa',
                $management_kneaded_material->yakichikuwa)}}"/><br>
        </details>
        <details>
            <summary>粉類</summary>
                <a>お好み焼き粉</a>
                <input type="number" name="management_powders[okonomiyaki_flour]" value="{{old('management_powders.okonomiyaki_flour',
                $management_powders->okonomiyaki_flour)}}"/><br>
                <a>片栗粉</a>
                <input type="number" name="management_powders[starch]" value="{{old('management_powders.starch',
                $management_powders->starch)}}"/><br>
                <a>唐揚げ粉</a>
                <input type="number" name="management_powders[fried_chicken_flour]" value="{{old('management_powders.fried_chicken_flour',
                $management_powders->fried_chicken_flour)}}"/><br>
                <a>小麦粉</a>
                <input type="number" name="management_powders[flour]" value="{{old('management_powders.flour',
                $management_powders->flour)}}"/><br>
                <a>小麦胚芽</a>
                <input type="number" name="management_powders[wheat_germ]" value="{{old('management_powders.wheat_germ',
                $management_powders->wheat_germ)}}"/><br>
                <a>米粉</a>
                <input type="number" name="management_powders[rice_flour]" value="{{old('management_powders.rice_flour',
                $management_powders->rice_flour)}}"/><br>
                <a>コーンスターチ</a>
                <input type="number" name="management_powders[cornstarch]" value="{{old('management_powders.cornstarch',
                $management_powders->cornstarch)}}"/><br>
                <a>そば粉</a>
                <input type="number" name="management_powders[buckwheat_flour]" value="{{old('management_powders.buckwheat_flour',
                $management_powders->buckwheat_flour)}}"/><br>
                <a>たこ焼き粉</a>
                <input type="number" name="management_powders[takoyaki_flour]" value="{{old('management_powders.takoyaki_flour',
                $management_powders->takoyaki_flour)}}"/><br>
                <a>天ぷら粉</a>
                <input type="number" name="management_powders[tempura_flour]" value="{{old('management_powders.tempura_flour',
                $management_powders->tempura_flour)}}"/><br>
                <a>ノンフライ用粉</a>
                <input type="number" name="management_powders[non_fried_flour]" value="{{old('management_powders.non_fried_flour',
                $management_powders->non_fried_flour)}}"/><br>
                <a>パン粉</a>
                <input type="number" name="management_powders[bread_crumbs]" value="{{old('management_powders.bread_crumbs',
                $management_powders->bread_crumbs)}}"/><br>
                <a>ふすま</a>
                <input type="number" name="management_powders[husuma]" value="{{old('management_powders.husuma',
                $management_powders->husuma)}}"/><br>
        </details>
        <details>
            <summary>乾物類</summary>
                <a>青のり</a>
                <input type="number" name="management_dried_material[green_laver]" value="{{old('management_dried_material.green_laver',
                $management_dried_material->green_laver)}}"/><br>
                <a>味付けのり</a>
                <input type="number" name="management_dried_material[seasoned_seaweed]" value="{{old('management_dried_material.seasoned_seaweed',
                $management_dried_material->seasoned_seaweed)}}"/><br>
                <a>カツオ節</a>
                <input type="number" name="management_dried_material[katsuobushi]" value="{{old('management_dried_material.katsuobushi',
                $management_dried_material->katsuobushi)}}"/><br>
                <a>乾燥ひじき</a>
                <input type="number" name="management_dried_material[dried_hijiki]" value="{{old('management_dried_material.dried_hijiki',
                $management_dried_material->dried_hijiki)}}"/><br>
                <a>乾燥豆</a>
                <input type="number" name="management_dried_material[dried_beans]" value="{{old('management_dried_material.dried_beans',
                $management_dried_material->dried_beans)}}"/><br>
                <a>乾燥野菜</a>
                <input type="number" name="management_dried_material[dried_vagetables]" value="{{old('management_dried_material.dried_vagetables',
                $management_dried_material->dried_vagetables)}}"/><br>
                <a>乾燥湯葉</a>
                <input type="number" name="management_dried_material[dried_yuba]" value="{{old('management_dried_material.dried_yuba',
                $management_dried_material->dried_yuba)}}"/><br>
                <a>乾燥わかめ</a>
                <input type="number" name="management_dried_material[dried_seaweed]" value="{{old('management_dried_material.dried_seaweed',
                $management_dried_material->dried_seaweed)}}"/><br>
                <a>かんぴょう</a>
                <input type="number" name="management_dried_material[kanpyo]" value="{{old('management_dried_material.kanpyo',
                $management_dried_material->kanpyo)}}"/><br>
                <a>きくらげ</a>
                <input type="number" name="management_dried_material[wood_ear]" value="{{old('management_dried_material.wood_ear',
                $management_dried_material->wood_ear)}}"/><br>
                <a>きな粉</a>
                <input type="number" name="management_dried_material[kinako]" value="{{old('management_dried_material.kinako',
                $management_dried_material->kinako)}}"/><br>
                <a>切り干し大根</a>
                <input type="number" name="management_dried_material[kiriboshi_daikon]" value="{{old('management_dried_material.kiriboshi_daikon',
                $management_dried_material->kiriboshi_daikon)}}"/><br>
                <a>くずきり</a>
                <input type="number" name="management_dried_material[kuzukiri]" value="{{old('management_dried_material.kuzukiri',
                $management_dried_material->kuzukiri)}}"/><br>
                <a>削り節</a>
                <input type="number" name="management_dried_material[kezuribushi]" value="{{old('management_dried_material.kezuribushi',
                $management_dried_material->kezuribushi)}}"/><br>
                <a>高野豆腐</a>
                <input type="number" name="management_dried_material[koya_tohu]" value="{{old('management_dried_material.koya_tohu',
                $management_dried_material->koya_tohu)}}"/><br>
                <a>ごま</a>
                <input type="number" name="management_dried_material[sesame]" value="{{old('management_dried_material.sesame',
                $management_dried_material->sesame)}}"/><br>
                <a>だし昆布</a>
                <input type="number" name="management_dried_material[dashi_kelp]" value="{{old('management_dried_material.dashi_kelp',
                $management_dried_material->dashi_kelp)}}"/><br>
                <a>とろろ昆布</a>
                <input type="number" name="management_dried_material[tororo_kelp]" value="{{old('management_dried_material.tororo_kelp',
                $management_dried_material->tororo_kelp)}}"/><br>
                <a>煮干し</a>
                <input type="number" name="management_dried_material[niboshi]" value="{{old('management_dried_material.niboshi',
                $management_dried_material->niboshi)}}"/><br>
                <a>春雨</a>
                <input type="number" name="management_dried_material[harusame]" value="{{old('management_dried_material.harusame',
                $management_dried_material->harusame)}}"/><br>
                <a>麩</a>
                <input type="number" name="management_dried_material[wheat_bran]" value="{{old('management_dried_material.wheat_bran',
                $management_dried_material->wheat_bran)}}"/><br>
                <a>ふりかけ</a>
                <input type="number" name="management_dried_material[hurikake]" value="{{old('management_dried_material.hurikake',
                $management_dried_material->hurikake)}}"/><br>
                <a>干しエビ</a>
                <input type="number" name="management_dried_material[dried_shrimp]" value="{{old('management_dried_material.dried_shrimp',
                $management_dried_material->dried_shrimp)}}"/><br>
                <a>焼きのり</a>
                <input type="number" name="management_dried_material[grilled_seaweed]" value="{{old('management_dried_material.grilled_seaweed',
                $management_dried_material->grilled_seaweed)}}"/><br>
        </details>
        <details>
            <summary>缶詰・瓶詰</summary>
                <a>缶詰の魚介類</a>
                <input type="number" name="management_canned_bottled[canned_fish_and_shellfish]" value="{{old('management_canned_bottled.canned_fish_and_shellfish',
                $management_canned_bottled->canned_fish_and_shellfish)}}"/><br>
                <a>缶詰のフルーツ類</a>
                <input type="number" name="management_canned_bottled[canned_fruit]" value="{{old('management_canned_bottled.canned_fruit',
                $management_canned_bottled->canned_fruit)}}"/><br>
        </details>
        <details>
            <summary>調味料</summary>
                    <a>ウスターソース</a>
                    <input type="number" name="management_seasoning[worcestershire_sauce]" value="{{old('management_seasoning.worcestershire_sauce',
                    $management_seasoning->worcestershire_sauce)}}"/><br>
                    <a>ケチャップ</a>
                    <input type="number" name="management_seasoning[ketchup]" value="{{old('management_seasoning.ketchup',
                    $management_seasoning->ketchup)}}"/><br>
                    <a>砂糖</a>
                    <input type="number" name="management_seasoning[sugar]" value="{{old('management_seasoning.sugar',
                    $management_seasoning->sugar)}}"/><br>
                    <a>塩</a>
                    <input type="number" name="management_seasoning[salt]" value="{{old('management_seasoning.salt',
                    $management_seasoning->salt)}}"/><br>
                    <a>酢</a>
                    <input type="number" name="management_seasoning[vinegar]" value="{{old('management_seasoning.vinegar',
                    $management_seasoning->vinegar)}}"/><br>
                    <a>醤油</a>
                    <input type="number" name="management_seasoning[soy_sauce]" value="{{old('management_seasoning.soy_sauce',
                    $management_seasoning->soy_sauce)}}"/><br>
                    <a>だし</a>
                    <input type="number" name="management_seasoning[dashi]" value="{{old('management_seasoning.dashi',
                    $management_seasoning->dashi)}}"/><br>
                    <a>ポン酢</a>
                    <input type="number" name="management_seasoning[ponzu_sauce]" value="{{old('management_seasoning.ponzu_sauce',
                    $management_seasoning->ponzu_sauce)}}"/><br>
                    <a>マヨネーズ</a>
                    <input type="number" name="management_seasoning[mayonnaise]" value="{{old('management_seasoning.mayonnaise',
                    $management_seasoning->mayonnaise)}}"/><br>
                    <a>味噌</a>
                    <input type="number" name="management_seasoning[miso]" value="{{old('management_seasoning.miso',
                    $management_seasoning->miso)}}"/><br>
                    <a>めんつゆ</a>
                    <input type="number" name="management_seasoning[noodle_soup]" value="{{old('management_seasoning.noodle_soup',
                    $management_seasoning->noodle_soup)}}"/><br>
                <h2>ドレッシング</h2>
                    <a>イタリアン</a>
                    <input type="number" name="management_dressing[italian_dressing]" value="{{old('management_dressing.italian_dressing',
                    $management_dressing->italian_dressing)}}"/><br>
                    <a>青じそ</a>
                    <input type="number" name="management_dressing[green_perilla_dressing]" value="{{old('management_dressing.green_perilla_dressing',
                    $management_dressing->green_perilla_dressing)}}"/><br>
                    <a>ごま</a>
                    <input type="number" name="management_dressing[sesame_dressing]" value="{{old('management_dressing.sesame_dressing',
                    $management_dressing->sesame_dressing)}}"/><br>
                    <a>シーザー</a>
                    <input type="number" name="management_dressing[caesar_dressing]" value="{{old('management_dressing.caesar_dressing',
                    $management_dressing->caesar_dressing)}}"/><br>
                    <a>醤油</a>
                    <input type="number" name="management_dressing[soy_sauce_dressing]" value="{{old('management_dressing.soy_sauce_dressing',
                    $management_dressing->soy_sauce_dressing)}}"/><br>
                    <a>中華</a>
                    <input type="number" name="management_dressing[chinese_dressing]" value="{{old('management_dressing.chinese_dressing',
                    $management_dressing->chinese_dressing)}}"/><br>
                    <a>フレンチ</a>
                    <input type="number" name="management_dressing[french_dressing]" value="{{old('management_dressing.french_dressing',
                    $management_dressing->french_dressing)}}"/><br>
                    <a>わさび醤油</a>
                    <input type="number" name="management_dressing[wasabi_soy_sauce_dressing]" value="{{old('management_dressing.wasabi_soy_sauce_dressing',
                    $management_dressing->wasabi_soy_sauce_dressing)}}"/><br>
                <h2>薬味</h2>
                    <a>大葉</a>
                    <input type="number" name="management_yakumi[oba]" value="{{old('management_yakumi.oba',
                    $management_yakumi->oba)}}"/><br>
                    <a>生姜</a>
                    <input type="number" name="management_yakumi[ginger]" value="{{old('management_yakumi.ginger',
                    $management_yakumi->ginger)}}"/><br>
                    <a>三つ葉</a>
                    <input type="number" name="management_yakumi[mitsuba]" value="{{old('management_yakumi.mitsuba',
                    $management_yakumi->mitsuba)}}"/><br>
                    <a>ミョウガ</a>
                    <input type="number" name="management_yakumi[japanese_ginger]" value="{{old('management_yakumi.japanese_ginger',
                    $management_yakumi->japanese_ginger)}}"/><br>
                    <a>柚子</a>
                    <input type="number" name="management_yakumi[yuzu]" value="{{old('management_yakumi.yuzu',
                    $management_yakumi->yuzu)}}"/><br>
                    <a>わさび</a>
                    <input type="number" name="management_yakumi[wasabi]" value="{{old('management_yakumi.wasabi',
                    $management_yakumi->wasabi)}}"/><br>
                <h2>ハーブ</h2>
                    <a>パクチー</a>
                    <input type="number" name="management_herbs[coriander]" value="{{old('management_herbs.coriander',
                    $management_herbs->coriander)}}"/><br>
                    <a>バジル</a>
                    <input type="number" name="management_herbs[basil]" value="{{old('management_herbs.basil',
                    $management_herbs->basil)}}"/><br>
                    <a>パセリ</a>
                    <input type="number" name="management_herbs[parsley]" value="{{old('management_herbs.parsley',
                    $management_herbs->parsley)}}"/><br>
                    <a>ルッコラ</a>
                    <input type="number" name="management_herbs[arugula]" value="{{old('management_herbs.arugula',
                    $management_herbs->arugula)}}"/><br>
                    <a>レモングラス</a>
                    <input type="number" name="management_herbs[lemongrass]" value="{{old('management_herbs.lemongrass',
                    $management_herbs->lemongrass)}}"/><br>
                    <a>ローズマリー</a>
                    <input type="number" name="management_herbs[rosemary]" value="{{old('management_herbs.rosemary',
                    $management_herbs->rosemary)}}"/><br>
                <h2>オイル</h2>
                    <a>亜麻仁油</a>
                    <input type="number" name="management_oil[flaxseed_oil]" value="{{old('management_oil.flaxseed_oil',
                    $management_oil->flaxseed_oil)}}"/><br>
                    <a>えごま油</a>
                    <input type="number" name="management_oil[egoma_oil]" value="{{old('management_oil.egoma_oil',
                    $management_oil->egoma_oil)}}"/><br>
                    <a>オリーブオイル</a>
                    <input type="number" name="management_oil[olive_oil]" value="{{old('management_oil.olive_oil',
                    $management_oil->olive_oil)}}"/><br>
                    <a>ココナッツオイル</a>
                    <input type="number" name="management_oil[coconut_oil]"value="{{old('management_oil.coconut_oil',
                    $management_oil->coconut_oil)}}"/><br>
                    <a>ごま油</a>
                    <input type="number" name="management_oil[sesame_oil]" value="{{old('management_oil.sesame_oil',
                    $management_oil->sesame_oil)}}"/><br>
                    <a>コーン油</a>
                    <input type="number" name="management_oil[corn_oil]" value="{{old('management_oil.corn_oil',
                    $management_oil->corn_oil)}}"/><br>
                    <a>サラダ油</a>
                    <input type="number" name="management_oil[salad_oil]" value="{{old('management_oil.salad_oil',
                    $management_oil->salad_oil)}}"/><br>
                    <a>菜種油</a>
                    <input type="number" name="management_oil[rapeseed_oil]" value="{{old('management_oil.rapeseed_oil',
                    $management_oil->rapeseed_oil)}}"/><br>
                <h2>スパイス</h2>
                    <a>ガーリック</a>
                    <input type="number" name="management_spices[garlic_spice]" value="{{old('management_spices.garlic_spice',
                    $management_spices->garlic_spice)}}"/><br>
                    <a>クミン</a>
                    <input type="number" name="management_spices[cumin]" value="{{old('management_spices.cumin',
                    $management_spices->cumin)}}"/><br>
                    <a>胡椒</a>
                    <input type="number" name="management_spices[pepper]" value="{{old('management_spices.pepper',
                    $management_spices->pepper)}}"/><br>
                    <a>七味</a>
                    <input type="number" name="management_spices[shichimi]" value="{{old('management_spices.shichimi',
                    $management_spices->shichimi)}}"/><br>
                    <a>シナモン</a>
                    <input type="number" name="management_spices[cinnamon]" value="{{old('management_spices.cinnamon',
                    $management_spices->cinnamon)}}"/><br>
                    <a>ターメリック</a>
                    <input type="number" name="management_spices[turmeric]" value="{{old('management_spices.turmeric',
                    $management_spices->turmeric)}}"/><br>
                    <a>唐辛子</a>
                    <input type="number" name="management_spices[chili]" value="{{old('management_spices.chili',
                    $management_spices->chili)}}"/><br>
        </details>
        <input type="submit" value="保存"/>
    </form>
    <a href="/food/management">戻る</a>
</body>
@endsection