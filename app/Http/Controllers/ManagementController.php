<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ManagementRequest;
use App\User;
use App\ManagementBean;
use App\ManagementBeef;
use App\ManagementCannedBottled;
use App\ManagementCarbohydratesBread;
use App\ManagementCarbohydratesCereals;
use App\ManagementCarbohydratesNoodles;
use App\ManagementCheese;
use App\ManagementChicken;
use App\ManagementDressing;
use App\ManagementDriedMaterial;
use App\ManagementEggmilk;
use App\ManagementFruits;
use App\ManagementHerbs;
use App\ManagementKneadedMaterial;
use App\ManagementMarineProducts;
use App\ManagementMushroom;
use App\ManagementMutton;
use App\ManagementOil;
use App\ManagementOtherMeat;
use App\ManagementPork;
use App\ManagementPowders;
use App\ManagementSeasoning;
use App\ManagementSeaweed;
use App\ManagementShellfish;
use App\ManagementShrimp;
use App\ManagementSpices;
use App\ManagementTohunattopickles;
use App\ManagementVegetable;
use App\ManagementYakumi;


class ManagementController extends Controller
{
    public function top(){
        
        return view('management/top');
        
    }
    
    public function create($id,ManagementCarbohydratesBread $management_carbohydrates_bread,
    ManagementCarbohydratesCereals $management_carbohydrates_cereals,ManagementCarbohydratesNoodles $management_carbohydrates_noodles,
    ManagementBean $management_bean,ManagementBeef $management_beef,ManagementCannedBottled $management_canned_bottled,
    ManagementCheese $management_cheese,ManagementChicken $management_chicken,ManagementDressing $management_dressing,
    ManagementDriedMaterial $management_dried_material,ManagementEggmilk $management_eggmilk,ManagementFruits $management_fruits,
    ManagementHerbs $management_herbs,ManagementKneadedMaterial $management_kneaded_material,ManagementMarineProducts $management_marine_products,
    ManagementMushroom $management_mushroom,ManagementMutton $management_mutton,ManagementOil $management_oil,
    ManagementOtherMeat $management_other_meat,ManagementPork $management_pork,ManagementPowders $management_powders,
    ManagementSeasoning $management_seasoning,ManagementSeaweed $management_seaweed,ManagementShellfish $management_shellfish,
    ManagementShrimp $management_shrimp,ManagementSpices $management_spices,ManagementTohunattopickles $management_tohunattopickles,
    ManagementVegetable $management_vegetable,ManagementYakumi $management_yakumi){
        
        $management_carbohydrates_bread = ManagementCarbohydratesBread::find($id);
        $management_carbohydrates_cereals = ManagementCarbohydratesCereals::find($id);
        $management_carbohydrates_noodles = ManagementCarbohydratesNoodles::find($id);
        $management_bean = ManagementBean::find($id);
        $management_beef = ManagementBeef::find($id);
        $management_canned_bottled = ManagementCannedBottled::find($id);
        $management_cheese = ManagementCheese::find($id);
        $management_chicken = ManagementChicken::find($id);
        $management_dressing = ManagementDressing::find($id);
        $management_dried_material = ManagementDriedMaterial::find($id);
        $management_eggmilk = ManagementEggmilk::find($id);
        $management_fruits = ManagementFruits::find($id);
        $management_herbs = ManagementHerbs::find($id);
        $management_kneaded_material = ManagementKneadedMaterial::find($id);
        $management_marine_products = ManagementMarineProducts::find($id);
        $management_mushroom = ManagementMushroom::find($id);
        $management_mutton = ManagementMutton::find($id);
        $management_oil = ManagementOil::find($id);
        $management_other_meat = ManagementOtherMeat::find($id);
        $management_pork = ManagementPork::find($id);
        $management_powders = ManagementPowders::find($id);
        $management_seasoning = ManagementSeasoning::find($id);
        $management_seaweed = ManagementSeaweed::find($id);
        $management_shellfish = ManagementShellfish::find($id);
        $management_shrimp = ManagementShrimp::find($id);
        $management_spices = ManagementSpices::find($id);
        $management_tohunattopickles = ManagementTohunattopickles::find($id);
        $management_vegetable = ManagementVegetable::find($id);
        $management_yakumi = ManagementYakumi::find($id);
        
        return view('management/create')->with(['id'=>$id])
        ->with(['management_carbohydrates_bread'=>$management_carbohydrates_bread])
        ->with(['management_carbohydrates_cereals'=>$management_carbohydrates_cereals])
        ->with(['management_carbohydrates_noodles'=>$management_carbohydrates_noodles])
        ->with(['management_bean'=>$management_bean])
        ->with(['management_beef'=>$management_beef])
        ->with(['management_canned_bottled'=>$management_canned_bottled])
        ->with(['management_cheese'=>$management_cheese])
        ->with(['management_chicken'=>$management_chicken])
        ->with(['management_dressing'=>$management_dressing])
        ->with(['management_dried_material'=>$management_dried_material])
        ->with(['management_eggmilk'=>$management_eggmilk])
        ->with(['management_fruits'=>$management_fruits])
        ->with(['management_herbs'=>$management_herbs])
        ->with(['management_kneaded_material'=>$management_kneaded_material])
        ->with(['management_marine_products'=>$management_marine_products])
        ->with(['management_mushroom'=>$management_mushroom])
        ->with(['management_mutton'=>$management_mutton])
        ->with(['management_oil'=>$management_oil])
        ->with(['management_other_meat'=>$management_other_meat])
        ->with(['management_pork'=>$management_pork])
        ->with(['management_powders'=>$management_powders])
        ->with(['management_seasoning'=>$management_seasoning])
        ->with(['management_seaweed'=>$management_seaweed])
        ->with(['management_shellfish'=>$management_shellfish])
        ->with(['management_shrimp'=>$management_shrimp])
        ->with(['management_spices'=>$management_spices])
        ->with(['management_tohunattopickles'=>$management_tohunattopickles])
        ->with(['management_vegetable'=>$management_vegetable])
        ->with(['management_yakumi'=>$management_yakumi]);
        
    }
    
    public function update(ManagementRequest $request,$id,ManagementCarbohydratesBread $management_carbohydrates_bread,
    ManagementCarbohydratesCereals $management_carbohydrates_cereals,ManagementCarbohydratesNoodles $management_carbohydrates_noodles,
    ManagementBean $management_bean,ManagementBeef $management_beef,ManagementCannedBottled $management_canned_bottled,
    ManagementCheese $management_cheese,ManagementChicken $management_chicken,ManagementDressing $management_dressing,
    ManagementDriedMaterial $management_dried_material,ManagementEggmilk $management_eggmilk,ManagementFruits $management_fruits,
    ManagementHerbs $management_herbs,ManagementKneadedMaterial $management_kneaded_material,ManagementMarineProducts $management_marine_products,
    ManagementMushroom $management_mushroom,ManagementMutton $management_mutton,ManagementOil $management_oil,
    ManagementOtherMeat $management_other_meat,ManagementPork $management_pork,ManagementPowders $management_powders,
    ManagementSeasoning $management_seasoning,ManagementSeaweed $management_seaweed,ManagementShellfish $management_shellfish,
    ManagementShrimp $management_shrimp,ManagementSpices $management_spices,ManagementTohunattopickles $management_tohunattopickles,
    ManagementVegetable $management_vegetable,ManagementYakumi $management_yakumi){
        
        $input_management_carbohydrates_bread = $request['management_carbohydrates_bread'];
        $management_carbohydrates_bread = ManagementCarbohydratesBread::find($id);
        $management_carbohydrates_bread->fill($input_management_carbohydrates_bread)->save();
        
        $input_management_carbohydrates_cereals = $request['management_carbohydrates_cereals'];
        $management_carbohydrates_cereals = ManagementCarbohydratesCereals::find($id);
        $management_carbohydrates_cereals->fill($input_management_carbohydrates_cereals)->save();
        
        $input_management_carbohydrates_noodles = $request['management_carbohydrates_noodles'];
        $management_carbohydrates_noodles = ManagementCarbohydratesNoodles::find($id);
        $management_carbohydrates_noodles->fill($input_management_carbohydrates_noodles)->save();
        
        $input_management_bean = $request['management_bean'];
        $management_bean = ManagementBean::find($id);
        $management_bean ->fill($input_management_bean)->save();
        
        $input_management_beef = $request['management_beef'];
        $management_beef = ManagementBeef::find($id);
        $management_beef ->fill($input_management_beef)->save();
        
        $input_management_canned_bottled = $request['management_canned_bottled'];
        $management_canned_bottled = ManagementCannedBottled::find($id);
        $management_canned_bottled ->fill($input_management_canned_bottled)->save();
        
        $input_management_cheese = $request['management_cheese'];
        $management_cheese = ManagementCheese::find($id);
        $management_cheese ->fill($input_management_cheese)->save();
        
        $input_management_chicken = $request['management_chicken'];
        $management_chicken = ManagementChicken::find($id);
        $management_chicken ->fill($input_management_chicken)->save();
        
        $input_management_dressing = $request['management_dressing'];
        $management_dressing = ManagementDressing::find($id);
        $management_dressing ->fill($input_management_dressing)->save();
        
        $input_management_dried_material = $request['management_dried_material'];
        $management_dried_material = ManagementDriedMaterial::find($id);
        $management_dried_material ->fill($input_management_dried_material)->save();
        
        $input_management_eggmilk = $request['management_eggmilk'];
        $management_eggmilk = ManagementEggmilk::find($id);
        $management_eggmilk ->fill($input_management_eggmilk)->save();
        
        $input_management_fruits = $request['management_fruits'];
        $management_fruits = ManagementFruits::find($id);
        $management_fruits ->fill($input_management_fruits)->save();
        
        $input_management_herbs = $request['management_herbs'];
        $management_herbs = ManagementHerbs::find($id);
        $management_herbs ->fill($input_management_herbs)->save();
        
        $input_management_kneaded_material = $request['management_kneaded_material'];
        $management_kneaded_material = ManagementKneadedMaterial::find($id);
        $management_kneaded_material ->fill($input_management_kneaded_material)->save();
        
        $input_management_marine_products = $request['management_marine_products'];
        $management_marine_products = ManagementMarineProducts::find($id);
        $management_marine_products ->fill($input_management_marine_products)->save();
        
        $input_management_mushroom = $request['management_mushroom'];
        $management_mushroom = ManagementMushroom::find($id);
        $management_mushroom ->fill($input_management_mushroom)->save();
        
        $input_management_mutton = $request['management_mutton'];
        $management_mutton = ManagementMutton::find($id);
        $management_mutton ->fill($input_management_mutton)->save();
        
        $input_management_oil = $request['management_oil'];
        $management_oil = ManagementOil::find($id);
        $management_oil ->fill($input_management_oil)->save();
        
        $input_management_other_meat = $request['management_other_meat'];
        $management_other_meat = ManagementOtherMeat::find($id);
        $management_other_meat ->fill($input_management_other_meat)->save();
        
        $input_management_pork = $request['management_pork'];
        $management_pork = ManagementPork::find($id);
        $management_pork ->fill($input_management_pork)->save();
        
        $input_management_powders = $request['management_powders'];
        $management_powders = ManagementPowders::find($id);
        $management_powders ->fill($input_management_powders)->save();
        
        $input_management_seasoning = $request['management_seasoning'];
        $management_seasoning = ManagementSeasoning::find($id);
        $management_seasoning ->fill($input_management_seasoning)->save();
        
        $input_management_seaweed = $request['management_seaweed'];
        $management_seaweed = ManagementSeaweed::find($id);
        $management_seaweed ->fill($input_management_seaweed)->save();
        
        $input_management_shellfish = $request['management_shellfish'];
        $management_shellfish = ManagementShellfish::find($id);
        $management_shellfish ->fill($input_management_shellfish)->save();
        
        $input_management_shrimp = $request['management_shrimp'];
        $management_shrimp = ManagementShrimp::find($id);
        $management_shrimp ->fill($input_management_shrimp)->save();
        
        $input_management_spices = $request['management_spices'];
        $management_spices = ManagementSpices::find($id);
        $management_spices ->fill($input_management_spices)->save();
        
        $input_management_tohunattopickles = $request['management_tohunattopickles'];
        $management_tohunattopickles = ManagementTohunattopickles::find($id);
        $management_tohunattopickles ->fill($input_management_tohunattopickles)->save();
        
        $input_management_vegetable = $request['management_vegetable'];
        $management_vegetable = ManagementVegetable::find($id);
        $management_vegetable ->fill($input_management_vegetable)->save();
        
        $input_management_yakumi = $request['management_yakumi'];
        $management_yakumi = ManagementYakumi::find($id);
        $management_yakumi ->fill($input_management_yakumi)->save();
        
        return redirect('/food/management/updated');
    }
    
    public function updated(){
        return view('management/updated');
    }
    
    public function first(){
        ManagementBean::create([]);
        ManagementBeef::create([]);
        ManagementCannedBottled::create([]);
        ManagementCarbohydratesBread::create([]);
        ManagementCarbohydratesCereals::create([]);
        ManagementCarbohydratesNoodles::create([]);
        ManagementCheese::create([]);
        ManagementChicken::create([]);
        ManagementDressing::create([]);
        ManagementDriedMaterial::create([]);
        ManagementEggmilk::create([]);
        ManagementFruits::create([]);
        ManagementHerbs::create([]);
        ManagementKneadedMaterial::create([]);
        ManagementMarineProducts::create([]);
        ManagementMushroom::create([]);
        ManagementMutton::create([]);
        ManagementOil::create([]);
        ManagementOtherMeat::create([]);
        ManagementPork::create([]);
        ManagementPowders::create([]);
        ManagementSeasoning::create([]);
        ManagementSeaweed::create([]);
        ManagementShellfish::create([]);
        ManagementShrimp::create([]);
        ManagementSpices::create([]);
        ManagementTohunattopickles::create([]);
        ManagementVegetable::create([]);
        ManagementYakumi::create([]);
        return view('top');
    }
}