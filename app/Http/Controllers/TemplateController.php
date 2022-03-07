<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\TemplateRequest;
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
    public function top(){
        return view('template/top');
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
    TemplateVegetable $template_vegetable,TemplateYakumi $template_yakumi){
        
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
        
        return view('template/stored');
        
    }
    
}
