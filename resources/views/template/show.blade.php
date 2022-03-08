@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Template Index</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/food/management/template/edit/{{$template_title_body->id}}" method="POST" id="template_edit">
        @csrf
        <details>
            <summary>タイトル・説明</summary>
                <p>タイトル</p>
                <input type="textarea" name="template_title_body[title]" value="{{old('template_title_body.title',
                $template_title_body->title)}}"/><br>
                <p>説明</p>
                <input type="textarea" name="template_title_body[body]" value="{{old('template_title_body.body',
                $template_title_body->body)}}"/><br>
        </details>
        <details>
            <summary>炭水化物（パン類・穀類・麺類）</summary>
                <h2>パン類</h2>
                    <a>食パン</a>
                    <input type="number" name="template_carbohydrates_bread[plain_bread]" value="{{old('template_carbohydrates_bread.plain_bread',
                    $template_carbohydrates_bread->plain_bread)}}"/><br>
                    <a>コッペパン</a>
                    <input type="number" name="template_carbohydrates_bread[koppe_bread]" value="{{old('template_carbohydrates_bread.koppe_bread',
                    $template_carbohydrates_bread->koppe_bread)}}"/><br>
                    <a>クロワッサン</a>
                    <input type="number" name="template_carbohydrates_bread[croissant]" value="{{old('template_carbohydrates_bread.croissant',
                    $template_carbohydrates_bread->croissant)}}"/><br>
                    <a>ロールパン</a>
                    <input type="number" name="template_carbohydrates_bread[bread_roll]" value="{{old('template_carbohydrates_bread.bread_roll',
                    $template_carbohydrates_bread->bread_roll)}}"/><br>
                    <a>ベーグル</a>
                    <input type="number" name="template_carbohydrates_bread[bagel]" value="{{old('template_carbohydrates_bread.bagel',
                    $template_carbohydrates_bread->bagel)}}"/><br>
                    <a>デニッシュ</a>
                    <input type="number" name="template_carbohydrates_bread[danish]" value="{{old('template_carbohydrates_bread.danish',
                    $template_carbohydrates_bread->danish)}}"/><br>
                    <a>スコーン</a>
                    <input type="number" name="template_carbohydrates_bread[scone]" value="{{old('template_carbohydrates_bread.scone',
                    $template_carbohydrates_bread->scone)}}"/><br>
                    <a>バゲット</a>
                    <input type="number" name="template_carbohydrates_bread[baguette]" value="{{old('template_carbohydrates_bread.baguette',
                    $template_carbohydrates_bread->baguette)}}"/><br>
                    <a>バタール</a>
                    <input type="number" name="template_carbohydrates_bread[batal]" value="{{old('template_carbohydrates_bread.batal',
                    $template_carbohydrates_bread->batal)}}"/><br>
                    <a>ナン</a>
                    <input type="number" name="template_carbohydrates_bread[naan]" value="{{old('template_carbohydrates_bread.naan',
                    $template_carbohydrates_bread->naan)}}"/><br>
                    <a>グリッシーニ</a>
                    <input type="number" name="template_carbohydrates_bread[grissini]" value="{{old('template_carbohydrates_bread.grissini',
                    $template_carbohydrates_bread->grissini)}}"/><br>
                    <a>マフィン</a>
                    <input type="number" name="template_carbohydrates_bread[muffin]" value="{{old('template_carbohydrates_bread.muffin',
                    $template_carbohydrates_bread->muffin)}}"/><br>
                <h2>穀類</h2>
                    <a>米</a>
                    <input type="number" name="template_carbohydrates_cereals[rice]" value="{{old('template_carbohydrates_cereals.rice',
                    $template_carbohydrates_cereals->rice)}}"/><br>
                    <a>玄米</a>
                    <input type="number" name="template_carbohydrates_cereals[brown_rice]" value="{{old('template_carbohydrates_cereals.brown_rice',
                    $template_carbohydrates_cereals->brown_rice)}}"/><br>
                    <a>雑穀・麦</a>
                    <input type="number" name="template_carbohydrates_cereals[millet]" value="{{old('template_carbohydrates_cereals.millet',
                    $template_carbohydrates_cereals->millet)}}"/><br>
                    <a>もち米</a>
                    <input type="number" name="template_carbohydrates_cereals[sticky_rice]" value="{{old('template_carbohydrates_cereals.sticky_rice',
                    $template_carbohydrates_cereals->sticky_rice)}}"/><br>
                    <a>餅</a>
                    <input type="number" name="template_carbohydrates_cereals[rice_cake]" value="{{old('template_carbohydrates_cereals.rice_cake',
                    $template_carbohydrates_cereals->rice_cake)}}"/><br>
                    <a>餅巾着</a>
                    <input type="number" name="template_carbohydrates_cereals[mochikinchaku]" value="{{old('template_carbohydrates_cereals.mochikinchaku',
                    $template_carbohydrates_cereals->mochikinchaku)}}"/><br>
                    <a>シリアル</a>
                    <input type="number" name="template_carbohydrates_cereals[cereal]" value="{{old('template_carbohydrates_cereals.cereal',
                    $template_carbohydrates_cereals->cereal)}}"/><br>
                <h2>麺類</h2>
                    <a>うどん</a>
                    <input type="number" name="template_carbohydrates_noodles[udon]" value="{{old('template_carbohydrates_noodles.udon',
                    $template_carbohydrates_noodles->udon)}}"/><br>
                    <a>そうめん</a>
                    <input type="number" name="template_carbohydrates_noodles[somen]" value="{{old('template_carbohydrates_noodles.somen',
                    $template_carbohydrates_noodles->somen)}}"/><br>
                    <a>そば</a>
                    <input type="number" name="template_carbohydrates_noodles[soba]" value="{{old('template_carbohydrates_noodles.soba',
                    $template_carbohydrates_noodles->soba)}}"/><br>
                    <a>パスタ</a>
                    <input type="number" name="template_carbohydrates_noodles[pasta]" value="{{old('template_carbohydrates_noodles.pasta',
                    $template_carbohydrates_noodles->pasta)}}"/><br>
                    <a>ラーメン</a>
                    <input type="number" name="template_carbohydrates_noodles[ramen]" value="{{old('template_carbohydrates_noodles.ramen',
                    $template_carbohydrates_noodles->ramen)}}"/><br>
                    <a>焼きそば</a>
                    <input type="number" name="template_carbohydrates_noodles[fried_noodle]" value="{{old('template_carbohydrates_noodles.fried_noodle',
                    $template_carbohydrates_noodles->fried_noodle)}}"/><br>
                    <a>つけ麺</a>
                    <input type="number" name="template_carbohydrates_noodles[tsukemen]" value="{{old('template_carbohydrates_noodles.tsukemen',
                    $template_carbohydrates_noodles->tsukemen)}}"/><br>
                    <a>冷や麦</a>
                    <input type="number" name="template_carbohydrates_noodles[hiyamugi]" value="{{old('template_carbohydrates_noodles.hiyamugi',
                    $template_carbohydrates_noodles->hiyamugi)}}"/><br>
                    <a>冷麺</a>
                    <input type="number" name="template_carbohydrates_noodles[cold_noodle]" value="{{old('template_carbohydrates_noodles.cold_noodle',
                    $template_carbohydrates_noodles->cold_noodle)}}"/><br>
        </details>
        <details>
            <summary>野菜類</summary>
                    <a>アスパラガス</a>
                    <input type="number" name="template_vegetable[asparagus]" value="{{old('template_vegetable.asparagus',
                    $template_vegetable->asparagus)}}"/><br>
                    <a>かぼちゃ</a>
                    <input type="number" name="template_vegetable[pumpkin]" value="{{old('template_vegetable.pumpkin',
                    $template_vegetable->pumpkin)}}"/><br>
                    <a>キャベツ</a>
                    <input type="number" name="template_vegetable[cabbage]" value="{{old('template_vegetable.cabbage',
                    $template_vegetable->cabbage)}}"/><br>
                    <a>ごぼう</a>
                    <input type="number" name="template_vegetable[burdock]" value="{{old('template_vegetable.burdock',
                    $template_vegetable->burdock)}}"/><br>
                    <a>サツマイモ</a>
                    <input type="number" name="template_vegetable[satsumaimo]" value="{{old('template_vegetable.satsumaimo',
                    $template_vegetable->satsumaimo)}}"/><br>
                    <a>山菜</a>
                    <input type="number" name="template_vegetable[sansai]" value="{{old('template_vegetable.sansai',
                    $template_vegetable->sansai)}}"/><br>
                    <a>じゃがいも</a>
                    <input type="number" name="template_vegetable[potato]" value="{{old('template_vegetable.potato',
                    $template_vegetable->potato)}}"/><br>
                    <a>春菊</a>
                    <input type="number" name="template_vegetable[crowndaisy]" value="{{old('template_vegetable.crowndaisy',
                    $template_vegetable->crowndaisy)}}"/><br>
                    <a>しょうが</a>
                    <input type="number" name="template_vegetable[garlic]" value="{{old('template_vegetable.garlic',
                    $template_vegetable->garlic)}}"/><br>
                    <a>セロリ</a>
                    <input type="number" name="template_vegetable[celery]" value="{{old('template_vegetable.celery',
                    $template_vegetable->celery)}}"/><br>
                    <a>大根</a>
                    <input type="number" name="template_vegetable[daikon]" value="{{old('template_vegetable.daikon',
                    $template_vegetable->daikon)}}"/><br>
                    <a>たけのこ</a>
                    <input type="number" name="template_vegetable[banboo_shoots]" value="{{old('template_vegetable.banboo_shoots',
                    $template_vegetable->banboo_shoots)}}"/><br>
                    <a>たまねぎ</a>
                    <input type="number" name="template_vegetable[onion]" value="{{old('template_vegetable.onion',
                    $template_vegetable->onion)}}"/><br>
                    <a>豆苗</a>
                    <input type="number" name="template_vegetable[been_seedlings]" value="{{old('template_vegetable.been_seedlings',
                    $template_vegetable->been_seedlings)}}"/><br>
                    <a>とうもろこし</a>
                    <input type="number" name="template_vegetable[corn]" value="{{old('template_vegetable.corn',
                    $template_vegetable->corn)}}"/><br>
                    <a>トマト</a>
                    <input type="number" name="template_vegetable[tomato]" value="{{old('template_vegetable.tomato',
                    $template_vegetable->tomato)}}"/><br>
                    <a>なす</a>
                    <input type="number" name="template_vegetable[eggplant]" value="{{old('template_vegetable.eggplant',
                    $template_vegetable->eggplant)}}"/><br>
                    <a>にんじん</a>
                    <input type="number" name="template_vegetable[carrot]" value="{{old('template_vegetable.carrot',
                    $template_vegetable->carrot)}}"/><br>
                    <a>ネギ</a>
                    <input type="number" name="template_vegetable[green_onion]" value="{{old('template_vegetable.green_onion',
                    $template_vegetable->green_onion)}}"/><br>
                    <a>白菜</a>
                    <input type="number" name="template_vegetable[chinese_cabbage]" value="{{old('template_vegetable.chinese_cabbage',
                    $template_vegetable->chinese_cabbage)}}"/><br>
                    <a>ピーマン</a>
                    <input type="number" name="template_vegetable[green_pepper]" value="{{old('template_vegetable.green_pepper',
                    $template_vegetable->green_pepper)}}"/><br>
                    <a>ブロッコリー</a>
                    <input type="number" name="template_vegetable[broccoli]" value="{{old('template_vegetable.broccoli',
                    $template_vegetable->broccoli)}}"/><br>
                    <a>らっきょう</a>
                    <input type="number" name="template_vegetable[rakkyo]" value="{{old('template_vegetable.rakkyo',
                    $template_vegetable->rakkyo)}}"/><br>
                    <a>レタス</a>
                    <input type="number" name="template_vegetable[lettuce]" value="{{old('template_vegetable.lettuce',
                    $template_vegetable->lettuce)}}"/><br>
                    <a>レンコン</a>
                    <input type="number" name="template_vegetable[lotus_root]" value="{{old('template_vegetable.banboo_shoots',
                    $template_vegetable->lotus_root)}}"/><br>
                <h2>キノコ類</h2>
                    <a>エノキタケ（赤）</a>
                    <input type="number" name="template_mushroom[enokitake_red]" value="{{old('template_mushroom.enokitake_red',
                    $template_mushroom->enokitake_red)}}"/><br>
                    <a>エノキタケ（茶）</a>
                    <input type="number" name="template_mushroom[enokitake_brown]" value="{{old('template_mushroom.enokitake_brown',
                    $template_mushroom->enokitake_brown)}}"/><br>
                    <a>ブナシメジ（茶）</a>
                    <input type="number" name="template_mushroom[bunashimeji_brown]" value="{{old('template_mushroom.bunashimeji_brown',
                    $template_mushroom->bunashimeji_brown)}}"/><br>
                    <a>ブナシメジ（白）</a>
                    <input type="number" name="template_mushroom[bunashimeji_white]" value="{{old('template_mushroom.bunashimeji_white',
                    $template_mushroom->bunashimeji_white)}}"/><br>
                    <a>シイタケ</a>
                    <input type="number" name="template_mushroom[shitake]" value="{{old('template_mushroom.shitake',
                    $template_mushroom->shitake)}}"/><br>
                    <a>エリンギ</a>
                    <input type="number" name="template_mushroom[king_trumpet]" value="{{old('template_mushroom.king_trumpet',
                    $template_mushroom->king_trumpet)}}"/><br>
                    <a>マイタケ</a>
                    <input type="number" name="template_mushroom[maitake]" value="{{old('template_mushroom.maitake',
                    $template_mushroom->maitake)}}"/><br>
                    <a>白マイタケ</a>
                    <input type="number" name="template_mushroom[maitake_white]" value="{{old('template_mushroom.maitake_white',
                    $template_mushroom->maitake_white)}}"/><br>
                    <a>なめこ</a>
                    <input type="number" name="template_mushroom[nameko]" value="{{old('template_mushroom.nameko',
                    $template_mushroom->nameko)}}"/><br>
                    <a>マッシュルーム</a>
                    <input type="number" name="template_mushroom[mushroom]" value="{{old('template_mushroom.mushroom',
                    $template_mushroom->mushroom)}}"/><br>
                    <a>ヒラタケ</a>
                    <input type="number" name="template_mushroom[oyster_mushroom]" value="{{old('template_mushroom.oyster_mushroom',
                    $template_mushroom->oyster_mushroom)}}"/><br>
                <h2>豆類</h2>
                    <a>枝豆</a>
                    <input type="number" name="template_bean[edamame]" value="{{old('template_bean.edamame',
                    $template_bean->edamame)}}"/><br>
                    <a>大豆</a>
                    <input type="number" name="template_bean[soybean]" value="{{old('template_bean.soybean',
                    $template_bean->soybean)}}"/><br>
                    <a>グリーンピース</a>
                    <input type="number" name="template_bean[greenpeace]" value="{{old('template_bean.greenpeace',
                    $template_bean->greenpeace)}}"/><br>
                    <a>そら豆</a>
                    <input type="number" name="template_bean[broad_bean]" value="{{old('template_bean.broad_bean',
                    $template_bean->broad_bean)}}"/><br>
                    <a>落花生</a>
                    <input type="number" name="template_bean[peanut]" value="{{old('template_bean.peanut',
                    $template_bean->peanut)}}"/><br>
                    <a>エンドウ豆</a>
                    <input type="number" name="template_bean[endomame]" value="{{old('template_bean.edamame',
                    $template_bean->endomame)}}"/><br>
                    <a>インゲン豆</a>
                    <input type="number" name="template_bean[green_bean]" value="{{old('template_bean.green_bean',
                    $template_bean->green_bean)}}"/><br>
        </details>
        <details>
            <summary>魚介類</summary>
                    <a>アジ</a>
                    <input type="number" name="template_marine_products[horse_mackerel]" value="{{old('template_marine_products.horse_mackerel',
                    $template_marine_products->horse_mackerel)}}"/><br>
                    <a>アナゴ</a>
                    <input type="number" name="template_marine_products[anago]" value="{{old('template_marine_products.anago',
                    $template_marine_products->anago)}}"/><br>
                    <a>イカ</a>
                    <input type="number" name="template_marine_products[squid]" value="{{old('template_marine_products.squid',
                    $template_marine_products->squid)}}"/><br>
                    <a>いくら</a>
                    <input type="number" name="template_marine_products[ikura]" value="{{old('template_marine_products.ikura',
                    $template_marine_products->ikura)}}"/><br>
                    <a>イワシ</a>
                    <input type="number" name="template_marine_products[sardine]" value="{{old('template_marine_products.sardine',
                    $template_marine_products->sardine)}}"/><br>
                    <a>ウナギ</a>
                    <input type="number" name="template_marine_products[unagi]" value="{{old('template_marine_products.unagi',
                    $template_marine_products->unagi)}}"/><br>
                    <a>ウニ</a>
                    <input type="number" name="template_marine_products[sea_urchin]" value="{{old('template_marine_products.sea_urchin',
                    $template_marine_products->sea_urchin)}}"/><br>
                    <a>かずのこ</a>
                    <input type="number" name="template_marine_products[herring_roe]" value="{{old('template_marine_products.herring_roe',
                    $template_marine_products->herring_roe)}}"/><br>
                    <a>カツオ</a>
                    <input type="number" name="template_marine_products[skipjack]" value="{{old('template_marine_products.skipjack',
                    $template_marine_products->skipjack)}}"/><br>
                    <a>カニ</a>
                    <input type="number" name="template_marine_products[crab]" value="{{old('template_marine_products.crab',
                    $template_marine_products->crab)}}"/><br>
                    <a>サーモン</a>
                    <input type="number" name="template_marine_products[salmon]" value="{{old('template_marine_products.salmon',
                    $template_marine_products->salmon)}}"/><br>
                    <a>サバ</a>
                    <input type="number" name="template_marine_products[mackerel]" value="{{old('template_marine_products.mackerel',
                    $template_marine_products->mackerel)}}"/><br>
                    <a>サンマ</a>
                    <input type="number" name="template_marine_products[pacific_saury]" value="{{old('template_marine_products.pacific_saury',
                    $template_marine_products->pacific_saury)}}"/><br>
                    <a>シシャモ</a>
                    <input type="number" name="template_marine_products[shishamo]" value="{{old('template_marine_products.shishamo',
                    $template_marine_products->shishamo)}}"/><br>
                    <a>シラス</a>
                    <input type="number" name="template_marine_products[shirasu]" value="{{old('template_marine_products.shirasu',
                    $template_marine_products->shirasu)}}"/><br>
                    <a>すじこ</a>
                    <input type="number" name="template_marine_products[sujiko]" value="{{old('template_marine_products.sujiko',
                    $template_marine_products->sujiko)}}"/><br>
                    <a>タイ</a>
                    <input type="number" name="template_marine_products[sea_bream]" value="{{old('template_marine_products.sea_bream',
                    $template_marine_products->sea_bream)}}"/><br>
                    <a>タコ</a>
                    <input type="number" name="template_marine_products[octopus]" value="{{old('template_marine_products.octopus',
                    $template_marine_products->octopus)}}"/><br>
                    <a>タラ</a>
                    <input type="number" name="template_marine_products[cod]" value="{{old('template_marine_products.cod',
                    $template_marine_products->cod)}}"/><br>
                    <a>たらこ</a>
                    <input type="number" name="template_marine_products[tarako]" value="{{old('template_marine_products.tarako',
                    $template_marine_products->tarako)}}"/><br>
                    <a>ちりめんじゃこ</a>
                    <input type="number" name="template_marine_products[chirimen]" value="{{old('template_marine_products.chirimen',
                    $template_marine_products->chirimen)}}"/><br>
                    <a>フグ</a>
                    <input type="number" name="template_marine_products[puffer_fish]" value="{{old('template_marine_products.puffer_fish',
                    $template_marine_products->puffer_fish)}}"/><br>
                    <a>ホッケ</a>
                    <input type="number" name="template_marine_products[hokke]" value="{{old('template_marine_products.hokke',
                    $template_marine_products->hokke)}}"/><br>
                    <a>マグロ</a>
                    <input type="number" name="template_marine_products[tuna]" value="{{old('template_marine_products.tuna',
                    $template_marine_products->tuna)}}"/><br>
                    <a>明太子</a>
                    <input type="number" name="template_marine_products[mentaiko]" value="{{old('template_marine_products.mentaiko',
                    $template_marine_products->mentaiko)}}"/><br>
                <h2>エビ類</h2>
                    <a>エビ（バナメイエビ）</a>
                    <input type="number" name="template_shrimp[whiteleg_shrimp]" value="{{old('template_shrimp.whiteleg_shrimp',
                    $template_shrimp->whiteleg_shrimp)}}"/><br>
                    <a>赤エビ</a>
                    <input type="number" name="template_shrimp[red_shrimp]" value="{{old('template_shrimp.red_shrimp',
                    $template_shrimp->red_shrimp)}}"/><br>
                    <a>ブラックタイガー</a>
                    <input type="number" name="template_shrimp[black_tiger_shrimp]" value="{{old('template_shrimp.black_tiger_shrimp',
                    $template_shrimp->black_tiger_shrimp)}}"/><br>
                    <a>クルマエビ</a>
                    <input type="number" name="template_shrimp[kurumaebi]" value="{{old('template_shrimp.kurumaebi',
                    $template_shrimp->kurumaebi)}}"/><br>
                    <a>ボタンエビ</a>
                    <input type="number" name="template_shrimp[button_shrimp]" value="{{old('template_shrimp.button_shrimp',
                    $template_shrimp->button_shrimp)}}"/><br>
                    <a>甘エビ</a>
                    <input type="number" name="template_shrimp[sweet_shrimp]" value="{{old('template_shrimp.sweet_shrimp',
                    $template_shrimp->sweet_shrimp)}}"/><br>
                    <a>芝エビ</a>
                    <input type="number" name="template_shrimp[shiba_shrimp]" value="{{old('template_shrimp.shiba_shrimp',
                    $template_shrimp->shiba_shrimp)}}"/><br>
                    <a>桜エビ</a>
                    <input type="number" name="template_shrimp[sakura_shrimp]" value="{{old('template_shrimp.sakura_shrimp',
                    $template_shrimp->sakura_shrimp)}}"/><br>
                    <a>伊勢エビ</a>
                    <input type="number" name="template_shrimp[spiny_lobster]" value="{{old('template_shrimp.spiny_lobster',
                    $template_shrimp->spiny_lobster)}}"/><br>
                    <a>ロブスター</a>
                    <input type="number" name="template_shrimp[lobster]" value="{{old('template_shrimp.lobster',
                    $template_shrimp->lobster)}}"/><br>
                <h2>海藻類</h2>
                    <a>生メカブ</a>
                    <input type="number" name="template_seaweed[namamekabu]" value="{{old('template_seaweed.namamekabu',
                    $template_seaweed->namamekabu)}}"/><br>
                    <a>生モズク</a>
                    <input type="number" name="template_seaweed[namamozuku]" value="{{old('template_seaweed.namamozuku',
                    $template_seaweed->namamozuku)}}"/><br>
                    <a>生ワカメ</a>
                    <input type="number" name="template_seaweed[namawakame]" value="{{old('template_seaweed.namawakame',
                    $template_seaweed->namawakame)}}"/><br>
                <h2>貝類</h2>
                    <a>アサリ</a>
                    <input type="number" name="template_shellfish[asari]" value="{{old('template_shellfish.asari',
                    $template_shellfish->asari)}}"/><br>
                    <a>牡蠣</a>
                    <input type="number" name="template_shellfish[oyster]" value="{{old('template_shellfish.oyster',
                    $template_shellfish->oyster)}}"/><br>
                    <a>シジミ</a>
                    <input type="number" name="template_shellfish[shijimi]" value="{{old('template_shellfish.shijimi',
                    $template_shellfish->shijimi)}}"/><br>
                    <a>ハマグリ</a>
                    <input type="number" name="template_shellfish[hamaguri]" value="{{old('template_shellfish.hamaguri',
                    $template_shellfish->hamaguri)}}"/><br>
                    <a>ホタテ</a>
                    <input type="number" name="template_shellfish[scallop]" value="{{old('template_shellfish.scallop',
                    $template_shellfish->scallop)}}"/><br>
                    <a>ホンビノス貝</a>
                    <input type="number" name="template_shellfish[hard_clam]" value="{{old('template_shellfish.hard_clam',
                    $template_shellfish->hard_clam)}}"/><br>
        </details>
        <details>
            <summary>肉類</summary>
                <h2>牛肉</h2>
                    <a>挽肉</a>
                    <input type="number" name="template_beef[beef_minced]" value="{{old('template_beef.beef_minced',
                    $template_beef->beef_minced)}}"/><br>
                    <a>肩</a>
                    <input type="number" name="template_beef[beef_shoulder]" value="{{old('template_beef.beef_shoulder',
                    $template_beef->beef_shoulder)}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="template_beef[beef_boston_butt]" value="{{old('template_beef.beef_boston_butt',
                    $template_beef->beef_boston_butt)}}"/><br>
                    <a>リブロース</a>
                    <input type="number" name="template_beef[beef_ribulose]" value="{{old('template_beef.beef_ribulose',
                    $template_beef->beef_ribulose)}}"/><br>
                    <a>サーロイン</a>
                    <input type="number" name="template_beef[beef_sirloin]" value="{{old('template_beef.beef_sirloin',
                    $template_beef->beef_sirloin)}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" name="template_beef[beef_fillet]" value="{{old('template_beef.beef_fillet',
                    $template_beef->beef_fillet)}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="template_beef[beef_ribs]" value="{{old('template_beef.beef_ribs',
                    $template_beef->beef_ribs)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="template_beef[beef_thigh]" value="{{old('template_beef.beef_thigh',
                    $template_beef->beef_thigh)}}"/><br>
                    <a>ランプ</a>
                    <input type="number" name="template_beef[beef_rump]" value="{{old('template_beef.beef_rump',
                    $template_beef->beef_rump)}}"/><br>
                    <a>スネ</a>
                    <input type="number" name="template_beef[beef_shin]" value="{{old('template_beef.beef_shin',
                    $template_beef->beef_shin)}}"/><br>
                    <a>ネック</a>
                    <input type="number" name="template_beef[beef_neck]" value="{{old('template_beef.beef_neck',
                    $template_beef->beef_neck)}}"/><br>
                <h2>豚肉</h2>
                    <a>挽肉</a>
                    <input type="number" name="template_pork[pork_minced]" value="{{old('template_pork.pork_minced',
                    $template_pork->pork_minced)}}"/><br>
                    <a>肩</a>
                    <input type="number" name="template_pork[pork_shoulder]" value="{{old('template_pork.pork_shoulder',
                    $template_pork->pork_shoulder)}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="template_pork[pork_boston_butt]" value="{{old('template_pork.pork_boston_butt',
                    $template_pork->pork_boston_butt)}}"/><br>
                    <a>ロース</a>
                    <input type="number" name="template_pork[pork_lose]" value="{{old('template_pork.pork_lose',
                    $template_pork->pork_lose)}}"/><br>
                    <a>ヒレ</a>
                    <input type="number" name="template_pork[pork_fillet]" value="{{old('template_pork.pork_fillet',
                    $template_pork->pork_fillet)}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="template_pork[pork_ribs]" value="{{old('template_pork.pork_ribs',
                    $template_pork->pork_ribs)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="template_pork[pork_thigh]" value="{{old('template_pork.pork_thigh',
                    $template_pork->pork_thigh)}}"/><br>
                <h2>鶏肉</h2>
                    <a>ムネ</a>
                    <input type="number" name="template_chicken[chicken_breast]" value="{{old('template_chicken.chicken_breast',
                    $template_chicken->chicken_breast)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="template_chicken[chicken_thigh]" value="{{old('template_chicken.chicken_thigh',
                    $template_chicken->chicken_thigh)}}"/><br>
                    <a>ササミ</a>
                    <input type="number" name="template_chicken[chicken_scissor]" value="{{old('template_chicken.chicken_scissor',
                    $template_chicken->chicken_scissor)}}"/><br>
                    <a>ハツ</a>
                    <input type="number" name="template_chicken[chicken_heart]" value="{{old('template_chicken.chicken_heart',
                    $template_chicken->chicken_heart)}}"/><br>
                    <a>レバー</a>
                    <input type="number" name="template_chicken[chicken_lever]" value="{{old('template_chicken.chicken_lever',
                    $template_chicken->chicken_lever)}}"/><br>
                    <a>砂肝</a>
                    <input type="number" name="template_chicken[chicken_sand]" value="{{old('template_chicken.chicken_sand',
                    $template_chicken->chicken_sand)}}"/><br>
                    <a>手羽</a>
                    <input type="number" name="template_chicken[chicken_wing]" value="{{old('template_chicken.chicken_wing',
                    $template_chicken->chicken_wing)}}"/><br>
                    <a>首皮</a>
                    <input type="number" name="template_chicken[chicken_neck_skin]" value="{{old('template_chicken.chicken_neck_skin',
                    $template_chicken->chicken_neck_skin)}}"/><br>
                    <a>ヤゲン軟骨</a>
                    <input type="number" name="template_chicken[chicken_cartilage]" value="{{old('template_chicken.chicken_cartilage',
                    $template_chicken->chicken_cartilage)}}"/><br>
                    <a>テール</a>
                    <input type="number" name="template_chicken[chicken_tail]" value="{{old('template_chicken.chicken_tail',
                    $template_chicken->chicken_tail)}}"/><br>
                <h2>羊肉</h2>
                    <a>ロース</a>
                    <input type="number" name="template_mutton[mutton_lose]" value="{{old('template_mutton.mutton_lose',
                    $template_mutton->mutton_lose)}}"/><br>
                    <a>肩</a>
                    <input type="number" name="template_mutton[mutton_shoulder]" value="{{old('template_mutton.mutton_shoulder',
                    $template_mutton->mutton_shoulder)}}"/><br>
                    <a>肩ロース</a>
                    <input type="number" name="template_mutton[mutton_boston_butt]" value="{{old('template_mutton.mutton_boston_butt',
                    $template_mutton->mutton_boston_butt)}}"/><br>
                    <a>モモ</a>
                    <input type="number" name="template_mutton[mutton_thigh]" value="{{old('template_mutton.mutton_thigh',
                    $template_mutton->mutton_thigh)}}"/><br>
                    <a>バラ</a>
                    <input type="number" name="template_mutton[mutton_ribs]" value="{{old('template_mutton.mutton_ribs',
                    $template_mutton->mutton_ribs)}}"/><br>
                <h2>その他肉類</h2>
                    <a>カモ肉</a>
                    <input type="number" name="template_other_meat[duck_meat]" value="{{old('template_other_meat.duck_meat',
                    $template_other_meat->duck_meat)}}"/><br>
                    <a>シカ肉</a>
                    <input type="number" name="template_other_meat[venison]" value="{{old('template_other_meat.venison',
                    $template_other_meat->venison)}}"/><br>
                    <a>七面鳥</a>
                    <input type="number" name="template_other_meat[turckey]" value="{{old('template_other_meat.turckey',
                    $template_other_meat->turckey)}}"/><br>
                    <a>ベーコン</a>
                    <input type="number" name="template_other_meat[bacon]" value="{{old('template_other_meat.bacon',
                    $template_other_meat->bacon)}}"/><br>
                    <a>ハム</a>
                    <input type="number" name="template_other_meat[ham]" value="{{old('template_other_meat.ham',
                    $template_other_meat->ham)}}"/><br>
                    <a>ソーセージ</a>
                    <input type="number" name="template_other_meat[sausage]" value="{{old('template_other_meat.sausage',
                    $template_other_meat->sausage)}}"/><br>
        </details>
        <details>
            <summary>卵・チーズ・乳製品</summary>
                    <a>ヨーグルト</a>
                    <input type="number" name="template_eggmilk[yogurt]" value="{{old('template_eggmilk.yogurt',
                    $template_eggmilk->yogurt)}}"/><br>
                    <a>牛乳</a>
                    <input type="number" name="template_eggmilk[milk]" value="{{old('template_eggmilk.milk',
                    $template_eggmilk->milk)}}"/><br>
                    <a>生クリーム</a>
                    <input type="number" name="template_eggmilk[fresh_cream]" value="{{old('template_eggmilk.fresh_cream',
                    $template_eggmilk->fresh_cream)}}"/><br>
                    <a>バター</a>
                    <input type="number" name="template_eggmilk[butter]" value="{{old('template_eggmilk.butter',
                    $template_eggmilk->butter)}}"/><br>
                    <a>マーガリン</a>
                    <input type="number" name="template_eggmilk[margarine]" value="{{old('template_eggmilk.margarine',
                    $template_eggmilk->margarine)}}"/><br>
                    <a>卵</a>
                    <input type="number" name="template_eggmilk[egg]" value="{{old('template_eggmilk.egg',
                    $template_eggmilk->egg)}}"/><br>
                    <a>ウズラ卵</a>
                    <input type="number" name="template_eggmilk[quail_egg]" value="{{old('template_eggmilk.quail_egg',
                    $template_eggmilk->quail_egg)}}"/><br>
                    <a>ピータン</a>
                    <input type="number" name="template_eggmilk[century_egg]" value="{{old('template_eggmilk.century_egg',
                    $template_eggmilk->century_egg)}}"/><br>
                    <a>温泉卵</a>
                    <input type="number" name="template_eggmilk[hot_spring_egg]" value="{{old('template_eggmilk.hot_spring_egg',
                    $template_eggmilk->hot_spring_egg)}}"/><br>
                    <a>燻製卵</a>
                    <input type="number" name="template_eggmilk[smoked_egg]" value="{{old('template_eggmilk.smoked_egg',
                    $template_eggmilk->smoked_egg)}}"/><br>
                <h2>チーズ類</h2>
                    <a>カマンベール</a>
                    <input type="number" name="template_cheese[camembert_cheese]" value="{{old('template_cheese.camembert_cheese',
                    $template_cheese->camembert_cheese)}}"/><br>
                    <a>クリーム</a>
                    <input type="number" name="template_cheese[cream_cheese]" value="{{old('template_cheese.cream_cheese',
                    $template_cheese->cream_cheese)}}"/><br>
                    <a>ゴルゴンゾーラ</a>
                    <input type="number" name="template_cheese[gorgonzola_cheese]" value="{{old('template_cheese.gorgonzola_cheese',
                    $template_cheese->gorgonzola_cheese)}}"/><br>
                    <a>ゴーダ</a>
                    <input type="number" name="template_cheese[gouda_cheese]" value="{{old('template_cheese.gouda_cheese',
                    $template_cheese->gouda_cheese)}}"/><br>
                    <a>チェダー</a>
                    <input type="number" name="template_cheese[cheddar_cheese]" value="{{old('template_cheese.cheddar_cheese',
                    $template_cheese->cheddar_cheese)}}"/><br>
                    <a>マスカルポーネ</a>
                    <input type="number" name="template_cheese[mascarpone_cheese]" value="{{old('template_cheese.mascarpone_cheese',
                    $template_cheese->mascarpone_cheese)}}"/><br>
                    <a>モッツァレラ</a>
                    <input type="number" name="template_cheese[mozzarella_cheese]" value="{{old('template_cheese.mozzarella_cheese',
                    $template_cheese->mozzarella_cheese)}}"/><br>
        </details>
        <details>
            <summary>果物類</summary>
                <a>あんず</a>
                <input type="number" name="template_fruits[apricot]" value="{{old('template_fruits.apricot',
                $template_fruits->apricot)}}"/><br>
                <a>イチゴ</a>
                <input type="number" name="template_fruits[strawberry]" value="{{old('template_fruits.strawberry',
                $template_fruits->strawberry)}}"/><br>
                <a>イチジク</a>
                <input type="number" name="template_fruits[fig]" value="{{old('template_fruits.fig',
                $template_fruits->fig)}}"/>
                <a>梅</a>
                <input type="number" name="template_fruits[plum]" value="{{old('template_fruits.plum',
                $template_fruits->plum)}}"/><br>
                <a>オレンジ</a>
                <input type="number" name="template_fruits[orange]" value="{{old('template_fruits.orange',
                $template_fruits->orange)}}"/><br>
                <a>柿</a>
                <input type="number" name="template_fruits[persimmon]" value="{{old('template_fruits.persimmon',
                $template_fruits->persimmon)}}"/><br>
                <a>キウイフルーツ</a>
                <input type="number" name="template_fruits[kiwifruit]" value="{{old('template_fruits.kiwifruit',
                $template_fruits->kiwifruit)}}"/><br>
                <a>栗</a>
                <input type="number" name="template_fruits[chestnut]" value="{{old('template_fruits.chestnut',
                $template_fruits->chestnut)}}"/><br>
                <a>グレープフルーツ</a>
                <input type="number" name="template_fruits[grapefruit]" value="{{old('template_fruits.grapefruit',
                $template_fruits->grapefruit)}}"/><br>
                <a>サクランボ</a>
                <input type="number" name="template_fruits[cherry]" value="{{old('template_fruits.cherry',
                $template_fruits->cherry)}}"/><br>
                <a>ザクロ</a>
                <input type="number" name="template_fruits[pomegranate]" value="{{old('template_fruits.pomegranate',
                $template_fruits->pomegranate)}}"/><br>
                <a>スイカ</a>
                <input type="number" name="template_fruits[watermelon]" value="{{old('template_fruits.watermelon',
                $template_fruits->watermelon)}}"/><br>
                <a>ナシ</a>
                <input type="number" name="template_fruits[japanese_pear]" value="{{old('template_fruits.japanese_pear',
                $template_fruits->japanese_pear)}}"/><br>
                <a>洋ナシ</a>
                <input type="number" name="template_fruits[pear]" value="{{old('template_fruits.pear',
                $template_fruits->pear)}}"/><br>
                <a>パイナップル</a>
                <input type="number" name="template_fruits[pineapple]" value="{{old('template_fruits.pineapple',
                $template_fruits->pineapple)}}"/><br>
                <a>バナナ</a>
                <input type="number" name="template_fruits[banana]" value="{{old('template_fruits.banana',
                $template_fruits->banana)}}"/><br>
                <a>ビワ</a>
                <input type="number" name="template_fruits[loquat]" value="{{old('template_fruits.loquat',
                $template_fruits->loquat)}}"/><br>
                <a>ブドウ</a>
                <input type="number" name="template_fruits[grape]" value="{{old('template_fruits.grape',
                $template_fruits->grape)}}"/><br>
                <a>ブルーベリー</a>
                <input type="number" name="template_fruits[blueberry]" value="{{old('template_fruits.blueberry',
                $template_fruits->blueberry)}}"/><br>
                <a>その他ベリー類</a>
                <input type="number" name="template_fruits[other_berries]" value="{{old('template_fruits.other_berries',
                $template_fruits->other_berries)}}"/><br>
                <a>マンゴー</a>
                <input type="number" name="template_fruits[mango]" value="{{old('template_fruits.mango',
                $template_fruits->mango)}}"/><br>
                <a>ミカン</a>
                <input type="number" name="template_fruits[mikan]" value="{{old('template_fruits.mikan',
                $template_fruits->mikan)}}"/><br>
                <a>メロン</a>
                <input type="number" name="template_fruits[melon]" value="{{old('template_fruits.melon',
                $template_fruits->melon)}}"/><br>
                <a>モモ</a>
                <input type="number" name="template_fruits[peach]" value="{{old('template_fruits.peach',
                $template_fruits->peach)}}"/><br>
                <a>リンゴ</a>
                <input type="number" name="template_fruits[apple]" value="{{old('template_fruits.apple',
                $template_fruits->apple)}}"/><br>
                <a>レモン</a>
                <input type="number" name="template_fruits[lemon]" value="{{old('template_fruits.lemon',
                $template_fruits->lemon)}}"/><br>
        </details>
        <details>
            <summary>漬物・豆腐・納豆</summary>
                <a>厚揚げ</a>
                <input type="number" name="template_tohunattopickles[atsuage]" value="{{old('template_tohunattopickles.atsuage',
                $template_tohunattopickles->atsuage)}}"/><br>
                <a>油揚げ</a>
                <input type="number" name="template_tohunattopickles[fried_tohu]" value="{{old('template_tohunattopickles.fried_tohu',
                $template_tohunattopickles->fried_tohu)}}"/><br>
                <a>梅干し</a>
                <input type="number" name="template_tohunattopickles[salted_plum]" value="{{old('template_tohunattopickles.salted_plum',
                $template_tohunattopickles->salted_plum)}}"/><br>
                <a>キムチ</a>
                <input type="number" name="template_tohunattopickles[kimchi]" value="{{old('template_tohunattopickles.kimchi',
                $template_tohunattopickles->kimchi)}}"/><br>
                <a>こんにゃく</a>
                <input type="number" name="template_tohunattopickles[konjac]" value="{{old('template_tohunattopickles.konjac',
                $template_tohunattopickles->konjac)}}"/><br>
                <a>ザーサイ</a>
                <input type="number" name="template_tohunattopickles[zha_cai]" value="{{old('template_tohunattopickles.zha_cai',
                $template_tohunattopickles->zha_cai)}}"/><br>
                <a>白滝</a>
                <input type="number" name="template_tohunattopickles[shirataki]" value="{{old('template_tohunattopickles.shirataki',
                $template_tohunattopickles->shirataki)}}"/><br>
                <a>たくあん</a>
                <input type="number" name="template_tohunattopickles[pickled_radish]" value="{{old('template_tohunattopickles.pickled_radish',
                $template_tohunattopickles->pickled_radish)}}"/><br>
                <a>佃煮</a>
                <input type="number" name="template_tohunattopickles[tsukudani]" value="{{old('template_tohunattopickles.tsukudani',
                $template_tohunattopickles->tsukudani)}}"/><br>
                <a>豆腐</a>
                <input type="number" name="template_tohunattopickles[tohu]" value="{{old('template_tohunattopickles.tohu',
                $template_tohunattopickles->tohu)}}"/><br>
                <a>豆腐よう</a>
                <input type="number" name="template_tohunattopickles[tohuyou]" value="{{old('template_tohunattopickles.tohuyou',
                $template_tohunattopickles->tohuyou)}}"/><br>
                <a>納豆</a>
                <input type="number" name="template_tohunattopickles[natto]" value="{{old('template_tohunattopickles.natto',
                $template_tohunattopickles->natto)}}"/><br>
                <a>生湯葉</a>
                <input type="number" name="template_tohunattopickles[namayuba]" value="{{old('template_tohunattopickles.namayuba',
                $template_tohunattopickles->namayuba)}}"/><br>
                <a>メンマ</a>
                <input type="number" name="template_tohunattopickles[menma]" value="{{old('template_tohunattopickles.menma',
                $template_tohunattopickles->menma)}}"/><br>
        </details>
        <details>
            <summary>練り物類</summary>
                <a>かまぼこ</a>
                <input type="number" name="template_kneaded_material[kamaboko]" value="{{old('template_kneaded_material.kamaboko',
                $template_kneaded_material->kamaboko)}}"/><br>
                <a>伊達巻き</a>
                <input type="number" name="template_kneaded_material[datemaki]" value="{{old('template_kneaded_material.datemaki',
                $template_kneaded_material->datemaki)}}"/><br>
                <a>つみれ</a>
                <input type="number" name="template_kneaded_material[tsumire]" value="{{old('template_kneaded_material.tsumire',
                $template_kneaded_material->tsumire)}}"/><br>
                <a>生ちくわ</a>
                <input type="number" name="template_kneaded_material[namachikuwa]" value="{{old('template_kneaded_material.namachikuwa',
                $template_kneaded_material->namachikuwa)}}"/><br>
                <a>はんぺん</a>
                <input type="number" name="template_kneaded_material[hanpen]" value="{{old('template_kneaded_material.hanpen',
                $template_kneaded_material->hanpen)}}"/><br>
                <a>焼きちくわ</a>
                <input type="number" name="template_kneaded_material[yakichikuwa]" value="{{old('template_kneaded_material.yakichikuwa',
                $template_kneaded_material->yakichikuwa)}}"/><br>
        </details>
        <details>
            <summary>粉類</summary>
                <a>お好み焼き粉</a>
                <input type="number" name="template_powders[okonomiyaki_flour]" value="{{old('template_powders.okonomiyaki_flour',
                $template_powders->okonomiyaki_flour)}}"/><br>
                <a>片栗粉</a>
                <input type="number" name="template_powders[starch]" value="{{old('template_powders.starch',
                $template_powders->starch)}}"/><br>
                <a>唐揚げ粉</a>
                <input type="number" name="template_powders[fried_chicken_flour]" value="{{old('template_powders.fried_chicken_flour',
                $template_powders->fried_chicken_flour)}}"/><br>
                <a>小麦粉</a>
                <input type="number" name="template_powders[flour]" value="{{old('template_powders.flour',
                $template_powders->flour)}}"/><br>
                <a>小麦胚芽</a>
                <input type="number" name="template_powders[wheat_germ]" value="{{old('template_powders.wheat_germ',
                $template_powders->wheat_germ)}}"/><br>
                <a>米粉</a>
                <input type="number" name="template_powders[rice_flour]" value="{{old('template_powders.rice_flour',
                $template_powders->rice_flour)}}"/><br>
                <a>コーンスターチ</a>
                <input type="number" name="template_powders[cornstarch]" value="{{old('template_powders.cornstarch',
                $template_powders->cornstarch)}}"/><br>
                <a>そば粉</a>
                <input type="number" name="template_powders[buckwheat_flour]" value="{{old('template_powders.buckwheat_flour',
                $template_powders->buckwheat_flour)}}"/><br>
                <a>たこ焼き粉</a>
                <input type="number" name="template_powders[takoyaki_flour]" value="{{old('template_powders.takoyaki_flour',
                $template_powders->takoyaki_flour)}}"/><br>
                <a>天ぷら粉</a>
                <input type="number" name="template_powders[tempura_flour]" value="{{old('template_powders.tempura_flour',
                $template_powders->tempura_flour)}}"/><br>
                <a>ノンフライ用粉</a>
                <input type="number" name="template_powders[non_fried_flour]" value="{{old('template_powders.non_fried_flour',
                $template_powders->non_fried_flour)}}"/><br>
                <a>パン粉</a>
                <input type="number" name="template_powders[bread_crumbs]" value="{{old('template_powders.bread_crumbs',
                $template_powders->bread_crumbs)}}"/><br>
                <a>ふすま</a>
                <input type="number" name="template_powders[husuma]" value="{{old('template_powders.husuma',
                $template_powders->husuma)}}"/><br>
        </details>
        <details>
            <summary>乾物類</summary>
                <a>青のり</a>
                <input type="number" name="template_dried_material[green_laver]" value="{{old('template_dried_material.green_laver',
                $template_dried_material->green_laver)}}"/><br>
                <a>味付けのり</a>
                <input type="number" name="template_dried_material[seasoned_seaweed]" value="{{old('template_dried_material.seasoned_seaweed',
                $template_dried_material->seasoned_seaweed)}}"/><br>
                <a>カツオ節</a>
                <input type="number" name="template_dried_material[katsuobushi]" value="{{old('template_dried_material.katsuobushi',
                $template_dried_material->katsuobushi)}}"/><br>
                <a>乾燥ひじき</a>
                <input type="number" name="template_dried_material[dried_hijiki]" value="{{old('template_dried_material.dried_hijiki',
                $template_dried_material->dried_hijiki)}}"/><br>
                <a>乾燥豆</a>
                <input type="number" name="template_dried_material[dried_beans]" value="{{old('template_dried_material.dried_beans',
                $template_dried_material->dried_beans)}}"/><br>
                <a>乾燥野菜</a>
                <input type="number" name="template_dried_material[dried_vagetables]" value="{{old('template_dried_material.dried_vagetables',
                $template_dried_material->dried_vagetables)}}"/><br>
                <a>乾燥湯葉</a>
                <input type="number" name="template_dried_material[dried_yuba]" value="{{old('template_dried_material.dried_yuba',
                $template_dried_material->dried_yuba)}}"/><br>
                <a>乾燥わかめ</a>
                <input type="number" name="template_dried_material[dried_seaweed]" value="{{old('template_dried_material.dried_seaweed',
                $template_dried_material->dried_seaweed)}}"/><br>
                <a>かんぴょう</a>
                <input type="number" name="template_dried_material[kanpyo]" value="{{old('template_dried_material.kanpyo',
                $template_dried_material->kanpyo)}}"/><br>
                <a>きくらげ</a>
                <input type="number" name="template_dried_material[wood_ear]" value="{{old('template_dried_material.wood_ear',
                $template_dried_material->wood_ear)}}"/><br>
                <a>きな粉</a>
                <input type="number" name="template_dried_material[kinako]" value="{{old('template_dried_material.kinako',
                $template_dried_material->kinako)}}"/><br>
                <a>切り干し大根</a>
                <input type="number" name="template_dried_material[kiriboshi_daikon]" value="{{old('template_dried_material.kiriboshi_daikon',
                $template_dried_material->kiriboshi_daikon)}}"/><br>
                <a>くずきり</a>
                <input type="number" name="template_dried_material[kuzukiri]" value="{{old('template_dried_material.kuzukiri',
                $template_dried_material->kuzukiri)}}"/><br>
                <a>削り節</a>
                <input type="number" name="template_dried_material[kezuribushi]" value="{{old('template_dried_material.kezuribushi',
                $template_dried_material->kezuribushi)}}"/><br>
                <a>高野豆腐</a>
                <input type="number" name="template_dried_material[koya_tohu]" value="{{old('template_dried_material.koya_tohu',
                $template_dried_material->koya_tohu)}}"/><br>
                <a>ごま</a>
                <input type="number" name="template_dried_material[sesame]" value="{{old('template_dried_material.sesame',
                $template_dried_material->sesame)}}"/><br>
                <a>だし昆布</a>
                <input type="number" name="template_dried_material[dashi_kelp]" value="{{old('template_dried_material.dashi_kelp',
                $template_dried_material->dashi_kelp)}}"/><br>
                <a>とろろ昆布</a>
                <input type="number" name="template_dried_material[tororo_kelp]" value="{{old('template_dried_material.tororo_kelp',
                $template_dried_material->tororo_kelp)}}"/><br>
                <a>煮干し</a>
                <input type="number" name="template_dried_material[niboshi]" value="{{old('template_dried_material.niboshi',
                $template_dried_material->niboshi)}}"/><br>
                <a>春雨</a>
                <input type="number" name="template_dried_material[harusame]" value="{{old('template_dried_material.harusame',
                $template_dried_material->harusame)}}"/><br>
                <a>麩</a>
                <input type="number" name="template_dried_material[wheat_bran]" value="{{old('template_dried_material.wheat_bran',
                $template_dried_material->wheat_bran)}}"/><br>
                <a>ふりかけ</a>
                <input type="number" name="template_dried_material[hurikake]" value="{{old('template_dried_material.hurikake',
                $template_dried_material->hurikake)}}"/><br>
                <a>干しエビ</a>
                <input type="number" name="template_dried_material[dried_shrimp]" value="{{old('template_dried_material.dried_shrimp',
                $template_dried_material->dried_shrimp)}}"/><br>
                <a>焼きのり</a>
                <input type="number" name="template_dried_material[grilled_seaweed]" value="{{old('template_dried_material.grilled_seaweed',
                $template_dried_material->grilled_seaweed)}}"/><br>
        </details>
        <details>
            <summary>缶詰・瓶詰</summary>
                <a>缶詰の魚介類</a>
                <input type="number" name="template_canned_bottled[canned_fish_and_shellfish]" value="{{old('template_canned_bottled.canned_fish_and_shellfish',
                $template_canned_bottled->canned_fish_and_shellfish)}}"/><br>
                <a>缶詰のフルーツ類</a>
                <input type="number" name="template_canned_bottled[canned_fruit]" value="{{old('template_canned_bottled.canned_fruit',
                $template_canned_bottled->canned_fruit)}}"/><br>
        </details>
        <details>
            <summary>調味料</summary>
                    <a>ウスターソース</a>
                    <input type="number" name="template_seasoning[worcestershire_sauce]" value="{{old('template_seasoning.worcestershire_sauce',
                    $template_seasoning->worcestershire_sauce)}}"/><br>
                    <a>ケチャップ</a>
                    <input type="number" name="template_seasoning[ketchup]" value="{{old('template_seasoning.ketchup',
                    $template_seasoning->ketchup)}}"/><br>
                    <a>砂糖</a>
                    <input type="number" name="template_seasoning[sugar]" value="{{old('template_seasoning.sugar',
                    $template_seasoning->sugar)}}"/><br>
                    <a>塩</a>
                    <input type="number" name="template_seasoning[salt]" value="{{old('template_seasoning.salt',
                    $template_seasoning->salt)}}"/><br>
                    <a>酢</a>
                    <input type="number" name="template_seasoning[vinegar]" value="{{old('template_seasoning.vinegar',
                    $template_seasoning->vinegar)}}"/><br>
                    <a>醤油</a>
                    <input type="number" name="template_seasoning[soy_sauce]" value="{{old('template_seasoning.soy_sauce',
                    $template_seasoning->soy_sauce)}}"/><br>
                    <a>だし</a>
                    <input type="number" name="template_seasoning[dashi]" value="{{old('template_seasoning.dashi',
                    $template_seasoning->dashi)}}"/><br>
                    <a>ポン酢</a>
                    <input type="number" name="template_seasoning[ponzu_sauce]" value="{{old('template_seasoning.ponzu_sauce',
                    $template_seasoning->ponzu_sauce)}}"/><br>
                    <a>マヨネーズ</a>
                    <input type="number" name="template_seasoning[mayonnaise]" value="{{old('template_seasoning.mayonnaise',
                    $template_seasoning->mayonnaise)}}"/><br>
                    <a>味噌</a>
                    <input type="number" name="template_seasoning[miso]" value="{{old('template_seasoning.miso',
                    $template_seasoning->miso)}}"/><br>
                    <a>めんつゆ</a>
                    <input type="number" name="template_seasoning[noodle_soup]" value="{{old('template_seasoning.noodle_soup',
                    $template_seasoning->noodle_soup)}}"/><br>
                <h2>ドレッシング</h2>
                    <a>イタリアン</a>
                    <input type="number" name="template_dressing[italian_dressing]" value="{{old('template_dressing.italian_dressing',
                    $template_dressing->italian_dressing)}}"/><br>
                    <a>青じそ</a>
                    <input type="number" name="template_dressing[green_perilla_dressing]" value="{{old('template_dressing.green_perilla_dressing',
                    $template_dressing->green_perilla_dressing)}}"/><br>
                    <a>ごま</a>
                    <input type="number" name="template_dressing[sesame_dressing]" value="{{old('template_dressing.sesame_dressing',
                    $template_dressing->sesame_dressing)}}"/><br>
                    <a>シーザー</a>
                    <input type="number" name="template_dressing[caesar_dressing]" value="{{old('template_dressing.caesar_dressing',
                    $template_dressing->caesar_dressing)}}"/><br>
                    <a>醤油</a>
                    <input type="number" name="template_dressing[soy_sauce_dressing]" value="{{old('template_dressing.soy_sauce_dressing',
                    $template_dressing->soy_sauce_dressing)}}"/><br>
                    <a>中華</a>
                    <input type="number" name="template_dressing[chinese_dressing]" value="{{old('template_dressing.chinese_dressing',
                    $template_dressing->chinese_dressing)}}"/><br>
                    <a>フレンチ</a>
                    <input type="number" name="template_dressing[french_dressing]" value="{{old('template_dressing.french_dressing',
                    $template_dressing->french_dressing)}}"/><br>
                    <a>わさび醤油</a>
                    <input type="number" name="template_dressing[wasabi_soy_sauce_dressing]" value="{{old('template_dressing.wasabi_soy_sauce_dressing',
                    $template_dressing->wasabi_soy_sauce_dressing)}}"/><br>
                <h2>薬味</h2>
                    <a>大葉</a>
                    <input type="number" name="template_yakumi[oba]" value="{{old('template_yakumi.oba',
                    $template_yakumi->oba)}}"/><br>
                    <a>生姜</a>
                    <input type="number" name="template_yakumi[ginger]" value="{{old('template_yakumi.ginger',
                    $template_yakumi->ginger)}}"/><br>
                    <a>三つ葉</a>
                    <input type="number" name="template_yakumi[mitsuba]" value="{{old('template_yakumi.mitsuba',
                    $template_yakumi->mitsuba)}}"/><br>
                    <a>ミョウガ</a>
                    <input type="number" name="template_yakumi[japanese_ginger]" value="{{old('template_yakumi.japanese_ginger',
                    $template_yakumi->japanese_ginger)}}"/><br>
                    <a>柚子</a>
                    <input type="number" name="template_yakumi[yuzu]" value="{{old('template_yakumi.yuzu',
                    $template_yakumi->yuzu)}}"/><br>
                    <a>わさび</a>
                    <input type="number" name="template_yakumi[wasabi]" value="{{old('template_yakumi.wasabi',
                    $template_yakumi->wasabi)}}"/><br>
                <h2>ハーブ</h2>
                    <a>パクチー</a>
                    <input type="number" name="template_herbs[coriander]" value="{{old('template_herbs.coriander',
                    $template_herbs->coriander)}}"/><br>
                    <a>バジル</a>
                    <input type="number" name="template_herbs[basil]" value="{{old('template_herbs.basil',
                    $template_herbs->basil)}}"/><br>
                    <a>パセリ</a>
                    <input type="number" name="template_herbs[parsley]" value="{{old('template_herbs.parsley',
                    $template_herbs->parsley)}}"/><br>
                    <a>ルッコラ</a>
                    <input type="number" name="template_herbs[arugula]" value="{{old('template_herbs.arugula',
                    $template_herbs->arugula)}}"/><br>
                    <a>レモングラス</a>
                    <input type="number" name="template_herbs[lemongrass]" value="{{old('template_herbs.lemongrass',
                    $template_herbs->lemongrass)}}"/><br>
                    <a>ローズマリー</a>
                    <input type="number" name="template_herbs[rosemary]" value="{{old('template_herbs.rosemary',
                    $template_herbs->rosemary)}}"/><br>
                <h2>オイル</h2>
                    <a>亜麻仁油</a>
                    <input type="number" name="template_oil[flaxseed_oil]" value="{{old('template_oil.flaxseed_oil',
                    $template_oil->flaxseed_oil)}}"/><br>
                    <a>えごま油</a>
                    <input type="number" name="template_oil[egoma_oil]" value="{{old('template_oil.egoma_oil',
                    $template_oil->egoma_oil)}}"/><br>
                    <a>オリーブオイル</a>
                    <input type="number" name="template_oil[olive_oil]" value="{{old('template_oil.olive_oil',
                    $template_oil->olive_oil)}}"/><br>
                    <a>ココナッツオイル</a>
                    <input type="number" name="template_oil[coconut_oil]"value="{{old('template_oil.coconut_oil',
                    $template_oil->coconut_oil)}}"/><br>
                    <a>ごま油</a>
                    <input type="number" name="template_oil[sesame_oil]" value="{{old('template_oil.sesame_oil',
                    $template_oil->sesame_oil)}}"/><br>
                    <a>コーン油</a>
                    <input type="number" name="template_oil[corn_oil]" value="{{old('template_oil.corn_oil',
                    $template_oil->corn_oil)}}"/><br>
                    <a>サラダ油</a>
                    <input type="number" name="template_oil[salad_oil]" value="{{old('template_oil.salad_oil',
                    $template_oil->salad_oil)}}"/><br>
                    <a>菜種油</a>
                    <input type="number" name="template_oil[rapeseed_oil]" value="{{old('template_oil.rapeseed_oil',
                    $template_oil->rapeseed_oil)}}"/><br>
                <h2>スパイス</h2>
                    <a>ガーリック</a>
                    <input type="number" name="template_spices[garlic_spice]" value="{{old('template_spices.garlic_spice',
                    $template_spices->garlic_spice)}}"/><br>
                    <a>クミン</a>
                    <input type="number" name="template_spices[cumin]" value="{{old('template_spices.cumin',
                    $template_spices->cumin)}}"/><br>
                    <a>胡椒</a>
                    <input type="number" name="template_spices[pepper]" value="{{old('template_spices.pepper',
                    $template_spices->pepper)}}"/><br>
                    <a>七味</a>
                    <input type="number" name="template_spices[shichimi]" value="{{old('template_spices.shichimi',
                    $template_spices->shichimi)}}"/><br>
                    <a>シナモン</a>
                    <input type="number" name="template_spices[cinnamon]" value="{{old('template_spices.cinnamon',
                    $template_spices->cinnamon)}}"/><br>
                    <a>ターメリック</a>
                    <input type="number" name="template_spices[turmeric]" value="{{old('template_spices.turmeric',
                    $template_spices->turmeric)}}"/><br>
                    <a>唐辛子</a>
                    <input type="number" name="template_spices[chili]" value="{{old('template_spices.chili',
                    $template_spices->chili)}}"/><br>
        </details>

        <input type="hidden" name="template_bean[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_beef[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_canned_bottled[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_carbohydrates_bread[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_carbohydrates_cereals[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_carbohydrates_noodles[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_cheese[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_chicken[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_dressing[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_dried_material[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_eggmilk[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_fruits[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_herbs[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_kneaded_material[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_marine_products[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_mushroom[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_mutton[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_oil[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_other_meat[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_pork[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_powders[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_seasoning[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_seaweed[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_shellfish[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_shrimp[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_spices[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_tohunattopickles[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_vegetable[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_yakumi[user_id]" value="{{Auth::User()->id}}"/>
        <input type="hidden" name="template_title_body[user_id]" value="{{Auth::User()->id}}"/>

        <input type="button" onclick="return editpost(this);" value="編集を保存"/>
    </form>
    <form action="/food/management/template/edit/{{$template_title_body->id}}" method="post" id="template_delete">
            @csrf
            @method('delete')
            <input type="button" onclick="return deletepost(this);" value="削除"></input>
    </form>
    <script>
            function editpost(e){
                
            const choice=window.confirm("編集を保存してよろしいですか？");
            if(choice){
                document.getElementById('template_edit').submit();
            }
            }
            function deletepost(e){
                
            const choice=window.confirm("テンプレートを削除してよろしいですか？");
            if(choice){
                document.getElementById('template_delete').submit();
            }
            }
    </script>
    <a href="/food/management/template/index/{{Auth::User()->id}}">戻る</a>
</body>
@endsection