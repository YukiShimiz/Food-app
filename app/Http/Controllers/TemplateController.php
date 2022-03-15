<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\TemplateRequest;
use App\TemplateTitleBody;
use App\TemplateBean;
use App\TemplateBeef;
use App\TemplateCannedBottled;
use App\TemplateCarbohydratesBread;
use App\TemplateCarbohydratesCereals;
use App\TemplateCarbohydratesNoodles;
use App\TemplateCheese;
use App\TemplateChicken;
use App\TemplateDressing;
use App\TemplateDriedMaterial;
use App\TemplateEggmilk;
use App\TemplateFruits;
use App\TemplateHerbs;
use App\TemplateKneadedMaterial;
use App\TemplateMarineProducts;
use App\TemplateMushroom;
use App\TemplateMutton;
use App\TemplateOil;
use App\TemplateOtherMeat;
use App\TemplatePork;
use App\TemplatePowders;
use App\TemplateSeasoning;
use App\TemplateSeaweed;
use App\TemplateShellfish;
use App\TemplateShrimp;
use App\TemplateSpices;
use App\TemplateTohunattopickles;
use App\TemplateVegetable;
use App\TemplateYakumi;


class TemplateController extends Controller
{
    public function top(User $user){
        return view('template/top')->with(['user'=>$user]);
    }
    
    public function create($id){
        
        return view('template/create')->with(['id'=>$id]);
        
    }
    
    public function store(TemplateRequest $request,$id,TemplateCarbohydratesBread $template_carbohydrates_bread,
    TemplateCarbohydratesCereals $template_carbohydrates_cereals,TemplateCarbohydratesNoodles $template_carbohydrates_noodles,
    TemplateBean $template_bean,TemplateBeef $template_beef,TemplateCannedBottled $template_canned_bottled,
    TemplateCheese $template_cheese,TemplateChicken $template_chicken,TemplateDressing $template_dressing,
    TemplateDriedMaterial $template_dried_material,TemplateEggmilk $template_eggmilk,TemplateFruits $template_fruits,
    TemplateHerbs $template_herbs,TemplateKneadedMaterial $template_kneaded_material,TemplateMarineProducts $template_marine_products,
    TemplateMushroom $template_mushroom,TemplateMutton $template_mutton,TemplateOil $template_oil,
    TemplateOtherMeat $template_other_meat,TemplatePork $template_pork,TemplatePowders $template_powders,
    TemplateSeasoning $template_seasoning,TemplateSeaweed $template_seaweed,TemplateShellfish $template_shellfish,
    TemplateShrimp $template_shrimp,TemplateSpices $template_spices,TemplateTohunattopickles $template_tohunattopickles,
    TemplateVegetable $template_vegetable,TemplateYakumi $template_yakumi,TemplateTitleBody $template_title_body){
        
        $input_template_carbohydrates_bread = $request['template_carbohydrates_bread'];
        $template_carbohydrates_bread->fill($input_template_carbohydrates_bread)->save();
        
        $input_template_carbohydrates_cereals = $request['template_carbohydrates_cereals'];
        $template_carbohydrates_cereals->fill($input_template_carbohydrates_cereals)->save();
        
        $input_template_carbohydrates_noodles = $request['template_carbohydrates_noodles'];
        $template_carbohydrates_noodles->fill($input_template_carbohydrates_noodles)->save();
        
        $input_template_bean = $request['template_bean'];
        $template_bean ->fill($input_template_bean)->save();
        
        $input_template_beef = $request['template_beef'];
        $template_beef ->fill($input_template_beef)->save();
        
        $input_template_canned_bottled = $request['template_canned_bottled'];
        $template_canned_bottled ->fill($input_template_canned_bottled)->save();
        
        $input_template_cheese = $request['template_cheese'];
        $template_cheese ->fill($input_template_cheese)->save();
        
        $input_template_chicken = $request['template_chicken'];
        $template_chicken ->fill($input_template_chicken)->save();
        
        $input_template_dressing = $request['template_dressing'];
        $template_dressing ->fill($input_template_dressing)->save();
        
        $input_template_dried_material = $request['template_dried_material'];
        $template_dried_material ->fill($input_template_dried_material)->save();
        
        $input_template_eggmilk = $request['template_eggmilk'];
        $template_eggmilk ->fill($input_template_eggmilk)->save();
        
        $input_template_fruits = $request['template_fruits'];
        $template_fruits ->fill($input_template_fruits)->save();
        
        $input_template_herbs = $request['template_herbs'];
        $template_herbs ->fill($input_template_herbs)->save();
        
        $input_template_kneaded_material = $request['template_kneaded_material'];
        $template_kneaded_material ->fill($input_template_kneaded_material)->save();
        
        $input_template_marine_products = $request['template_marine_products'];
        $template_marine_products ->fill($input_template_marine_products)->save();
        
        $input_template_mushroom = $request['template_mushroom'];
        $template_mushroom ->fill($input_template_mushroom)->save();
        
        $input_template_mutton = $request['template_mutton'];
        $template_mutton ->fill($input_template_mutton)->save();
        
        $input_template_oil = $request['template_oil'];
        $template_oil ->fill($input_template_oil)->save();
        
        $input_template_other_meat = $request['template_other_meat'];
        $template_other_meat ->fill($input_template_other_meat)->save();
        
        $input_template_pork = $request['template_pork'];
        $template_pork ->fill($input_template_pork)->save();
        
        $input_template_powders = $request['template_powders'];
        $template_powders ->fill($input_template_powders)->save();
        
        $input_template_seasoning = $request['template_seasoning'];
        $template_seasoning ->fill($input_template_seasoning)->save();
        
        $input_template_seaweed = $request['template_seaweed'];
        $template_seaweed ->fill($input_template_seaweed)->save();
        
        $input_template_shellfish = $request['template_shellfish'];
        $template_shellfish ->fill($input_template_shellfish)->save();
        
        $input_template_shrimp = $request['template_shrimp'];
        $template_shrimp ->fill($input_template_shrimp)->save();
        
        $input_template_spices = $request['template_spices'];
        $template_spices ->fill($input_template_spices)->save();
        
        $input_template_tohunattopickles = $request['template_tohunattopickles'];
        $template_tohunattopickles ->fill($input_template_tohunattopickles)->save();
        
        $input_template_vegetable = $request['template_vegetable'];
        $template_vegetable ->fill($input_template_vegetable)->save();
        
        $input_template_yakumi = $request['template_yakumi'];
        $template_yakumi ->fill($input_template_yakumi)->save();
        
        $input_template_title_body = $request['template_title_body'];
        $template_title_body ->fill($input_template_title_body)->save();
        
        return view('template/stored');
        
    }
    
    public function index(User $user,$id){
        $user=$user->find($id);
        return view('template/index')->with(['templates'=>$user->getByTemplate()]);
        
    }
    
    public function show(TemplateCarbohydratesBread $template_carbohydrates_bread,
    TemplateCarbohydratesCereals $template_carbohydrates_cereals,TemplateCarbohydratesNoodles $template_carbohydrates_noodles,
    TemplateBean $template_bean,TemplateBeef $template_beef,TemplateCannedBottled $template_canned_bottled,
    TemplateCheese $template_cheese,TemplateChicken $template_chicken,TemplateDressing $template_dressing,
    TemplateDriedMaterial $template_dried_material,TemplateEggmilk $template_eggmilk,TemplateFruits $template_fruits,
    TemplateHerbs $template_herbs,TemplateKneadedMaterial $template_kneaded_material,TemplateMarineProducts $template_marine_products,
    TemplateMushroom $template_mushroom,TemplateMutton $template_mutton,TemplateOil $template_oil,
    TemplateOtherMeat $template_other_meat,TemplatePork $template_pork,TemplatePowders $template_powders,
    TemplateSeasoning $template_seasoning,TemplateSeaweed $template_seaweed,TemplateShellfish $template_shellfish,
    TemplateShrimp $template_shrimp,TemplateSpices $template_spices,TemplateTohunattopickles $template_tohunattopickles,
    TemplateVegetable $template_vegetable,TemplateYakumi $template_yakumi,TemplateTitleBody $template_title_body,$id){
        
        $template_bean=$template_bean->find($id);
        $template_beef=$template_beef->find($id);
        $template_canned_bottled=$template_canned_bottled->find($id);
        $template_carbohydrates_bread=$template_carbohydrates_bread->find($id);
        $template_carbohydrates_cereals=$template_carbohydrates_cereals->find($id);
        $template_carbohydrates_noodles=$template_carbohydrates_noodles->find($id);
        $template_cheese=$template_cheese->find($id);
        $template_chicken=$template_chicken->find($id);
        $template_dressing=$template_dressing->find($id);
        $template_dried_material=$template_dried_material->find($id);
        $template_eggmilk=$template_eggmilk->find($id);
        $template_fruits=$template_fruits->find($id);
        $template_herbs=$template_herbs->find($id);
        $template_kneaded_material=$template_kneaded_material->find($id);
        $template_marine_products=$template_marine_products->find($id);
        $template_mushroom=$template_mushroom->find($id);
        $template_mutton=$template_mutton->find($id);
        $template_oil=$template_oil->find($id);
        $template_other_meat=$template_other_meat->find($id);
        $template_pork=$template_pork->find($id);
        $template_powders=$template_powders->find($id);
        $template_seasoning=$template_seasoning->find($id);
        $template_seaweed=$template_seaweed->find($id);
        $template_shellfish=$template_shellfish->find($id);
        $template_shrimp=$template_shrimp->find($id);
        $template_spices=$template_spices->find($id);
        $template_title_body=$template_title_body->find($id);
        $template_tohunattopickles=$template_tohunattopickles->find($id);
        $template_vegetable=$template_vegetable->find($id);
        $template_yakumi=$template_yakumi->find($id);
        
        return view('template/show')->with(['id'=>$id])
        ->with(['template_carbohydrates_bread'=>$template_carbohydrates_bread])
        ->with(['template_carbohydrates_cereals'=>$template_carbohydrates_cereals])
        ->with(['template_carbohydrates_noodles'=>$template_carbohydrates_noodles])
        ->with(['template_bean'=>$template_bean])
        ->with(['template_beef'=>$template_beef])
        ->with(['template_canned_bottled'=>$template_canned_bottled])
        ->with(['template_cheese'=>$template_cheese])
        ->with(['template_chicken'=>$template_chicken])
        ->with(['template_dressing'=>$template_dressing])
        ->with(['template_dried_material'=>$template_dried_material])
        ->with(['template_eggmilk'=>$template_eggmilk])
        ->with(['template_fruits'=>$template_fruits])
        ->with(['template_herbs'=>$template_herbs])
        ->with(['template_kneaded_material'=>$template_kneaded_material])
        ->with(['template_marine_products'=>$template_marine_products])
        ->with(['template_mushroom'=>$template_mushroom])
        ->with(['template_mutton'=>$template_mutton])
        ->with(['template_oil'=>$template_oil])
        ->with(['template_other_meat'=>$template_other_meat])
        ->with(['template_pork'=>$template_pork])
        ->with(['template_powders'=>$template_powders])
        ->with(['template_seasoning'=>$template_seasoning])
        ->with(['template_seaweed'=>$template_seaweed])
        ->with(['template_shellfish'=>$template_shellfish])
        ->with(['template_shrimp'=>$template_shrimp])
        ->with(['template_spices'=>$template_spices])
        ->with(['template_tohunattopickles'=>$template_tohunattopickles])
        ->with(['template_vegetable'=>$template_vegetable])
        ->with(['template_yakumi'=>$template_yakumi])
        ->with(['template_title_body'=>$template_title_body]);
        
    }
    
    public function edit(TemplateRequest $request,$id,TemplateCarbohydratesBread $template_carbohydrates_bread,
    TemplateCarbohydratesCereals $template_carbohydrates_cereals,TemplateCarbohydratesNoodles $template_carbohydrates_noodles,
    TemplateBean $template_bean,TemplateBeef $template_beef,TemplateCannedBottled $template_canned_bottled,
    TemplateCheese $template_cheese,TemplateChicken $template_chicken,TemplateDressing $template_dressing,
    TemplateDriedMaterial $template_dried_material,TemplateEggmilk $template_eggmilk,TemplateFruits $template_fruits,
    TemplateHerbs $template_herbs,TemplateKneadedMaterial $template_kneaded_material,TemplateMarineProducts $template_marine_products,
    TemplateMushroom $template_mushroom,TemplateMutton $template_mutton,TemplateOil $template_oil,
    TemplateOtherMeat $template_other_meat,TemplatePork $template_pork,TemplatePowders $template_powders,
    TemplateSeasoning $template_seasoning,TemplateSeaweed $template_seaweed,TemplateShellfish $template_shellfish,
    TemplateShrimp $template_shrimp,TemplateSpices $template_spices,TemplateTohunattopickles $template_tohunattopickles,
    TemplateVegetable $template_vegetable,TemplateYakumi $template_yakumi,TemplateTitleBody $template_title_body){
     
        $template_carbohydrates_bread = TemplateCarbohydratesBread::find($id);
        $template_carbohydrates_cereals = TemplateCarbohydratesCereals::find($id);
        $template_carbohydrates_noodles = TemplateCarbohydratesNoodles::find($id);
        $template_bean = TemplateBean::find($id);
        $template_beef = TemplateBeef::find($id);
        $template_canned_bottled = TemplateCannedBottled::find($id);
        $template_cheese = TemplateCheese::find($id);
        $template_chicken = TemplateChicken::find($id);
        $template_dressing = TemplateDressing::find($id);
        $template_dried_material = TemplateDriedMaterial::find($id);
        $template_eggmilk = TemplateEggmilk::find($id);
        $template_fruits = TemplateFruits::find($id);
        $template_herbs = TemplateHerbs::find($id);
        $template_kneaded_material = TemplateKneadedMaterial::find($id);
        $template_marine_products = TemplateMarineProducts::find($id);
        $template_mushroom = TemplateMushroom::find($id);
        $template_mutton = TemplateMutton::find($id);
        $template_oil = TemplateOil::find($id);
        $template_other_meat = TemplateOtherMeat::find($id);
        $template_pork = TemplatePork::find($id);
        $template_powders = TemplatePowders::find($id);
        $template_seasoning = TemplateSeasoning::find($id);
        $template_seaweed = TemplateSeaweed::find($id);
        $template_shellfish = TemplateShellfish::find($id);
        $template_shrimp = TemplateShrimp::find($id);
        $template_spices = TemplateSpices::find($id);
        $template_tohunattopickles = TemplateTohunattopickles::find($id);
        $template_vegetable = TemplateVegetable::find($id);
        $template_yakumi = TemplateYakumi::find($id);
        $template_title_body = TemplateTitleBody::find($id);
        
        $input_template_carbohydrates_bread = $request['template_carbohydrates_bread'];
        $template_carbohydrates_bread->fill($input_template_carbohydrates_bread)->save();
        
        $input_template_carbohydrates_cereals = $request['template_carbohydrates_cereals'];
        $template_carbohydrates_cereals->fill($input_template_carbohydrates_cereals)->save();
        
        $input_template_carbohydrates_noodles = $request['template_carbohydrates_noodles'];
        $template_carbohydrates_noodles->fill($input_template_carbohydrates_noodles)->save();
        
        $input_template_bean = $request['template_bean'];
        $template_bean ->fill($input_template_bean)->save();
        
        $input_template_beef = $request['template_beef'];
        $template_beef ->fill($input_template_beef)->save();
        
        $input_template_canned_bottled = $request['template_canned_bottled'];
        $template_canned_bottled ->fill($input_template_canned_bottled)->save();
        
        $input_template_cheese = $request['template_cheese'];
        $template_cheese ->fill($input_template_cheese)->save();
        
        $input_template_chicken = $request['template_chicken'];
        $template_chicken ->fill($input_template_chicken)->save();
        
        $input_template_dressing = $request['template_dressing'];
        $template_dressing ->fill($input_template_dressing)->save();
        
        $input_template_dried_material = $request['template_dried_material'];
        $template_dried_material ->fill($input_template_dried_material)->save();
        
        $input_template_eggmilk = $request['template_eggmilk'];
        $template_eggmilk ->fill($input_template_eggmilk)->save();
        
        $input_template_fruits = $request['template_fruits'];
        $template_fruits ->fill($input_template_fruits)->save();
        
        $input_template_herbs = $request['template_herbs'];
        $template_herbs ->fill($input_template_herbs)->save();
        
        $input_template_kneaded_material = $request['template_kneaded_material'];
        $template_kneaded_material ->fill($input_template_kneaded_material)->save();
        
        $input_template_marine_products = $request['template_marine_products'];
        $template_marine_products ->fill($input_template_marine_products)->save();
        
        $input_template_mushroom = $request['template_mushroom'];
        $template_mushroom ->fill($input_template_mushroom)->save();
        
        $input_template_mutton = $request['template_mutton'];
        $template_mutton ->fill($input_template_mutton)->save();
        
        $input_template_oil = $request['template_oil'];
        $template_oil ->fill($input_template_oil)->save();
        
        $input_template_other_meat = $request['template_other_meat'];
        $template_other_meat ->fill($input_template_other_meat)->save();
        
        $input_template_pork = $request['template_pork'];
        $template_pork ->fill($input_template_pork)->save();
        
        $input_template_powders = $request['template_powders'];
        $template_powders ->fill($input_template_powders)->save();
        
        $input_template_seasoning = $request['template_seasoning'];
        $template_seasoning ->fill($input_template_seasoning)->save();
        
        $input_template_seaweed = $request['template_seaweed'];
        $template_seaweed ->fill($input_template_seaweed)->save();
        
        $input_template_shellfish = $request['template_shellfish'];
        $template_shellfish ->fill($input_template_shellfish)->save();
        
        $input_template_shrimp = $request['template_shrimp'];
        $template_shrimp ->fill($input_template_shrimp)->save();
        
        $input_template_spices = $request['template_spices'];
        $template_spices ->fill($input_template_spices)->save();
        
        $input_template_tohunattopickles = $request['template_tohunattopickles'];
        $template_tohunattopickles ->fill($input_template_tohunattopickles)->save();
        
        $input_template_vegetable = $request['template_vegetable'];
        $template_vegetable ->fill($input_template_vegetable)->save();
        
        $input_template_yakumi = $request['template_yakumi'];
        $template_yakumi ->fill($input_template_yakumi)->save();
        
        $input_template_title_body = $request['template_title_body'];
        $template_title_body ->fill($input_template_title_body)->save();
        
        return view('template/stored');
       
    }
    
    public function delete($id,TemplateCarbohydratesBread $template_carbohydrates_bread,
    TemplateCarbohydratesCereals $template_carbohydrates_cereals,TemplateCarbohydratesNoodles $template_carbohydrates_noodles,
    TemplateBean $template_bean,TemplateBeef $template_beef,TemplateCannedBottled $template_canned_bottled,
    TemplateCheese $template_cheese,TemplateChicken $template_chicken,TemplateDressing $template_dressing,
    TemplateDriedMaterial $template_dried_material,TemplateEggmilk $template_eggmilk,TemplateFruits $template_fruits,
    TemplateHerbs $template_herbs,TemplateKneadedMaterial $template_kneaded_material,TemplateMarineProducts $template_marine_products,
    TemplateMushroom $template_mushroom,TemplateMutton $template_mutton,TemplateOil $template_oil,
    TemplateOtherMeat $template_other_meat,TemplatePork $template_pork,TemplatePowders $template_powders,
    TemplateSeasoning $template_seasoning,TemplateSeaweed $template_seaweed,TemplateShellfish $template_shellfish,
    TemplateShrimp $template_shrimp,TemplateSpices $template_spices,TemplateTohunattopickles $template_tohunattopickles,
    TemplateVegetable $template_vegetable,TemplateYakumi $template_yakumi,TemplateTitleBody $template_title_body){
        
        $template_carbohydrates_bread = TemplateCarbohydratesBread::find($id);
        $template_carbohydrates_cereals = TemplateCarbohydratesCereals::find($id);
        $template_carbohydrates_noodles = TemplateCarbohydratesNoodles::find($id);
        $template_bean = TemplateBean::find($id);
        $template_beef = TemplateBeef::find($id);
        $template_canned_bottled = TemplateCannedBottled::find($id);
        $template_cheese = TemplateCheese::find($id);
        $template_chicken = TemplateChicken::find($id);
        $template_dressing = TemplateDressing::find($id);
        $template_dried_material = TemplateDriedMaterial::find($id);
        $template_eggmilk = TemplateEggmilk::find($id);
        $template_fruits = TemplateFruits::find($id);
        $template_herbs = TemplateHerbs::find($id);
        $template_kneaded_material = TemplateKneadedMaterial::find($id);
        $template_marine_products = TemplateMarineProducts::find($id);
        $template_mushroom = TemplateMushroom::find($id);
        $template_mutton = TemplateMutton::find($id);
        $template_oil = TemplateOil::find($id);
        $template_other_meat = TemplateOtherMeat::find($id);
        $template_pork = TemplatePork::find($id);
        $template_powders = TemplatePowders::find($id);
        $template_seasoning = TemplateSeasoning::find($id);
        $template_seaweed = TemplateSeaweed::find($id);
        $template_shellfish = TemplateShellfish::find($id);
        $template_shrimp = TemplateShrimp::find($id);
        $template_spices = TemplateSpices::find($id);
        $template_tohunattopickles = TemplateTohunattopickles::find($id);
        $template_vegetable = TemplateVegetable::find($id);
        $template_yakumi = TemplateYakumi::find($id);
        $template_title_body = TemplateTitleBody::find($id);
        
        $template_carbohydrates_bread ->delete();
        $template_carbohydrates_cereals  ->delete();
        $template_carbohydrates_noodles  ->delete();
        $template_bean  ->delete();
        $template_beef  ->delete();
        $template_canned_bottled  ->delete();
        $template_cheese  ->delete();
        $template_chicken  ->delete();
        $template_dressing  ->delete();
        $template_dried_material  ->delete();
        $template_eggmilk  ->delete();
        $template_fruits  ->delete();
        $template_herbs  ->delete();
        $template_kneaded_material  ->delete();
        $template_marine_products  ->delete();
        $template_mushroom  ->delete();
        $template_mutton  ->delete();
        $template_oil  ->delete();
        $template_other_meat  ->delete();
        $template_pork  ->delete();
        $template_powders  ->delete();
        $template_seasoning  ->delete();
        $template_seaweed  ->delete();
        $template_shellfish  ->delete();
        $template_shrimp  ->delete();
        $template_spices  ->delete();
        $template_tohunattopickles  ->delete();
        $template_vegetable  ->delete();
        $template_yakumi  ->delete();
        $template_title_body  ->delete();
        
        return view('template/stored');
    }
    
    public function show_detail(TemplateCarbohydratesBread $template_carbohydrates_bread,
    TemplateCarbohydratesCereals $template_carbohydrates_cereals,TemplateCarbohydratesNoodles $template_carbohydrates_noodles,
    TemplateBean $template_bean,TemplateBeef $template_beef,TemplateCannedBottled $template_canned_bottled,
    TemplateCheese $template_cheese,TemplateChicken $template_chicken,TemplateDressing $template_dressing,
    TemplateDriedMaterial $template_dried_material,TemplateEggmilk $template_eggmilk,TemplateFruits $template_fruits,
    TemplateHerbs $template_herbs,TemplateKneadedMaterial $template_kneaded_material,TemplateMarineProducts $template_marine_products,
    TemplateMushroom $template_mushroom,TemplateMutton $template_mutton,TemplateOil $template_oil,
    TemplateOtherMeat $template_other_meat,TemplatePork $template_pork,TemplatePowders $template_powders,
    TemplateSeasoning $template_seasoning,TemplateSeaweed $template_seaweed,TemplateShellfish $template_shellfish,
    TemplateShrimp $template_shrimp,TemplateSpices $template_spices,TemplateTohunattopickles $template_tohunattopickles,
    TemplateVegetable $template_vegetable,TemplateYakumi $template_yakumi,TemplateTitleBody $template_title_body,$id){
        
        $template_bean=$template_bean->find($id);
        $template_beef=$template_beef->find($id);
        $template_canned_bottled=$template_canned_bottled->find($id);
        $template_carbohydrates_bread=$template_carbohydrates_bread->find($id);
        $template_carbohydrates_cereals=$template_carbohydrates_cereals->find($id);
        $template_carbohydrates_noodles=$template_carbohydrates_noodles->find($id);
        $template_cheese=$template_cheese->find($id);
        $template_chicken=$template_chicken->find($id);
        $template_dressing=$template_dressing->find($id);
        $template_dried_material=$template_dried_material->find($id);
        $template_eggmilk=$template_eggmilk->find($id);
        $template_fruits=$template_fruits->find($id);
        $template_herbs=$template_herbs->find($id);
        $template_kneaded_material=$template_kneaded_material->find($id);
        $template_marine_products=$template_marine_products->find($id);
        $template_mushroom=$template_mushroom->find($id);
        $template_mutton=$template_mutton->find($id);
        $template_oil=$template_oil->find($id);
        $template_other_meat=$template_other_meat->find($id);
        $template_pork=$template_pork->find($id);
        $template_powders=$template_powders->find($id);
        $template_seasoning=$template_seasoning->find($id);
        $template_seaweed=$template_seaweed->find($id);
        $template_shellfish=$template_shellfish->find($id);
        $template_shrimp=$template_shrimp->find($id);
        $template_spices=$template_spices->find($id);
        $template_title_body=$template_title_body->find($id);
        $template_tohunattopickles=$template_tohunattopickles->find($id);
        $template_vegetable=$template_vegetable->find($id);
        $template_yakumi=$template_yakumi->find($id);
        
        return view('template/detail')->with(['id'=>$id])
        ->with(['template_carbohydrates_bread'=>$template_carbohydrates_bread])
        ->with(['template_carbohydrates_cereals'=>$template_carbohydrates_cereals])
        ->with(['template_carbohydrates_noodles'=>$template_carbohydrates_noodles])
        ->with(['template_bean'=>$template_bean])
        ->with(['template_beef'=>$template_beef])
        ->with(['template_canned_bottled'=>$template_canned_bottled])
        ->with(['template_cheese'=>$template_cheese])
        ->with(['template_chicken'=>$template_chicken])
        ->with(['template_dressing'=>$template_dressing])
        ->with(['template_dried_material'=>$template_dried_material])
        ->with(['template_eggmilk'=>$template_eggmilk])
        ->with(['template_fruits'=>$template_fruits])
        ->with(['template_herbs'=>$template_herbs])
        ->with(['template_kneaded_material'=>$template_kneaded_material])
        ->with(['template_marine_products'=>$template_marine_products])
        ->with(['template_mushroom'=>$template_mushroom])
        ->with(['template_mutton'=>$template_mutton])
        ->with(['template_oil'=>$template_oil])
        ->with(['template_other_meat'=>$template_other_meat])
        ->with(['template_pork'=>$template_pork])
        ->with(['template_powders'=>$template_powders])
        ->with(['template_seasoning'=>$template_seasoning])
        ->with(['template_seaweed'=>$template_seaweed])
        ->with(['template_shellfish'=>$template_shellfish])
        ->with(['template_shrimp'=>$template_shrimp])
        ->with(['template_spices'=>$template_spices])
        ->with(['template_tohunattopickles'=>$template_tohunattopickles])
        ->with(['template_vegetable'=>$template_vegetable])
        ->with(['template_yakumi'=>$template_yakumi])
        ->with(['template_title_body'=>$template_title_body]);
        
    }
    
    public function show_detail_menu(TemplateCarbohydratesBread $template_carbohydrates_bread,
    TemplateCarbohydratesCereals $template_carbohydrates_cereals,TemplateCarbohydratesNoodles $template_carbohydrates_noodles,
    TemplateBean $template_bean,TemplateBeef $template_beef,TemplateCannedBottled $template_canned_bottled,
    TemplateCheese $template_cheese,TemplateChicken $template_chicken,TemplateDressing $template_dressing,
    TemplateDriedMaterial $template_dried_material,TemplateEggmilk $template_eggmilk,TemplateFruits $template_fruits,
    TemplateHerbs $template_herbs,TemplateKneadedMaterial $template_kneaded_material,TemplateMarineProducts $template_marine_products,
    TemplateMushroom $template_mushroom,TemplateMutton $template_mutton,TemplateOil $template_oil,
    TemplateOtherMeat $template_other_meat,TemplatePork $template_pork,TemplatePowders $template_powders,
    TemplateSeasoning $template_seasoning,TemplateSeaweed $template_seaweed,TemplateShellfish $template_shellfish,
    TemplateShrimp $template_shrimp,TemplateSpices $template_spices,TemplateTohunattopickles $template_tohunattopickles,
    TemplateVegetable $template_vegetable,TemplateYakumi $template_yakumi,TemplateTitleBody $template_title_body,$id){
        
        $template_bean=$template_bean->find($id);
        $template_beef=$template_beef->find($id);
        $template_canned_bottled=$template_canned_bottled->find($id);
        $template_carbohydrates_bread=$template_carbohydrates_bread->find($id);
        $template_carbohydrates_cereals=$template_carbohydrates_cereals->find($id);
        $template_carbohydrates_noodles=$template_carbohydrates_noodles->find($id);
        $template_cheese=$template_cheese->find($id);
        $template_chicken=$template_chicken->find($id);
        $template_dressing=$template_dressing->find($id);
        $template_dried_material=$template_dried_material->find($id);
        $template_eggmilk=$template_eggmilk->find($id);
        $template_fruits=$template_fruits->find($id);
        $template_herbs=$template_herbs->find($id);
        $template_kneaded_material=$template_kneaded_material->find($id);
        $template_marine_products=$template_marine_products->find($id);
        $template_mushroom=$template_mushroom->find($id);
        $template_mutton=$template_mutton->find($id);
        $template_oil=$template_oil->find($id);
        $template_other_meat=$template_other_meat->find($id);
        $template_pork=$template_pork->find($id);
        $template_powders=$template_powders->find($id);
        $template_seasoning=$template_seasoning->find($id);
        $template_seaweed=$template_seaweed->find($id);
        $template_shellfish=$template_shellfish->find($id);
        $template_shrimp=$template_shrimp->find($id);
        $template_spices=$template_spices->find($id);
        $template_title_body=$template_title_body->find($id);
        $template_tohunattopickles=$template_tohunattopickles->find($id);
        $template_vegetable=$template_vegetable->find($id);
        $template_yakumi=$template_yakumi->find($id);
        
        return view('template/detail_menu')->with(['id'=>$id])
        ->with(['template_carbohydrates_bread'=>$template_carbohydrates_bread])
        ->with(['template_carbohydrates_cereals'=>$template_carbohydrates_cereals])
        ->with(['template_carbohydrates_noodles'=>$template_carbohydrates_noodles])
        ->with(['template_bean'=>$template_bean])
        ->with(['template_beef'=>$template_beef])
        ->with(['template_canned_bottled'=>$template_canned_bottled])
        ->with(['template_cheese'=>$template_cheese])
        ->with(['template_chicken'=>$template_chicken])
        ->with(['template_dressing'=>$template_dressing])
        ->with(['template_dried_material'=>$template_dried_material])
        ->with(['template_eggmilk'=>$template_eggmilk])
        ->with(['template_fruits'=>$template_fruits])
        ->with(['template_herbs'=>$template_herbs])
        ->with(['template_kneaded_material'=>$template_kneaded_material])
        ->with(['template_marine_products'=>$template_marine_products])
        ->with(['template_mushroom'=>$template_mushroom])
        ->with(['template_mutton'=>$template_mutton])
        ->with(['template_oil'=>$template_oil])
        ->with(['template_other_meat'=>$template_other_meat])
        ->with(['template_pork'=>$template_pork])
        ->with(['template_powders'=>$template_powders])
        ->with(['template_seasoning'=>$template_seasoning])
        ->with(['template_seaweed'=>$template_seaweed])
        ->with(['template_shellfish'=>$template_shellfish])
        ->with(['template_shrimp'=>$template_shrimp])
        ->with(['template_spices'=>$template_spices])
        ->with(['template_tohunattopickles'=>$template_tohunattopickles])
        ->with(['template_vegetable'=>$template_vegetable])
        ->with(['template_yakumi'=>$template_yakumi])
        ->with(['template_title_body'=>$template_title_body]);
        
    }
    
    public function test(){
        return view('test');
    }
    
}
