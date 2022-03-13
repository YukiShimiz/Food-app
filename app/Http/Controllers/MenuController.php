<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\User;
use App\Menu;
use App\MenuBean;
use App\MenuBeef;
use App\MenuCannedBottled;
use App\MenuCarbohydratesBread;
use App\MenuCarbohydratesCereals;
use App\MenuCarbohydratesNoodles;
use App\MenuCheese;
use App\MenuChicken;
use App\MenuDressing;
use App\MenuDriedMaterial;
use App\MenuEggmilk;
use App\MenuFruits;
use App\MenuHerbs;
use App\MenuKneadedMaterial;
use App\MenuMarineProducts;
use App\MenuMushroom;
use App\MenuMutton;
use App\MenuOil;
use App\MenuOtherMeat;
use App\MenuPork;
use App\MenuPowders;
use App\MenuSeasoning;
use App\MenuSeaweed;
use App\MenuShellfish;
use App\MenuShrimp;
use App\MenuSpices;
use App\MenuTohunattopickles;
use App\MenuVegetable;
use App\MenuYakumi;


class MenuController extends Controller
{
    public function top(){
        return view('menu/top');
    }
    
    public function post(){
        return view('menu/post');
    }
    
    public function store(MenuRequest $request,$id,MenuCarbohydratesBread $menu_carbohydrates_bread,
    MenuCarbohydratesCereals $menu_carbohydrates_cereals,MenuCarbohydratesNoodles $menu_carbohydrates_noodles,
    MenuBean $menu_bean,MenuBeef $menu_beef,MenuCannedBottled $menu_canned_bottled,
    MenuCheese $menu_cheese,MenuChicken $menu_chicken,MenuDressing $menu_dressing,
    MenuDriedMaterial $menu_dried_material,MenuEggmilk $menu_eggmilk,MenuFruits $menu_fruits,
    MenuHerbs $menu_herbs,MenuKneadedMaterial $menu_kneaded_material,MenuMarineProducts $menu_marine_products,
    MenuMushroom $menu_mushroom,MenuMutton $menu_mutton,MenuOil $menu_oil,
    MenuOtherMeat $menu_other_meat,MenuPork $menu_pork,MenuPowders $menu_powders,
    MenuSeasoning $menu_seasoning,MenuSeaweed $menu_seaweed,MenuShellfish $menu_shellfish,
    MenuShrimp $menu_shrimp,MenuSpices $menu_spices,MenuTohunattopickles $menu_tohunattopickles,
    MenuVegetable $menu_vegetable,MenuYakumi $menu_yakumi,Menu $menu){
        
        $input_menu_carbohydrates_bread = $request['menu_carbohydrates_bread'];
        $menu_carbohydrates_bread->fill($input_menu_carbohydrates_bread)->save();
        
        $input_menu_carbohydrates_cereals = $request['menu_carbohydrates_cereals'];
        $menu_carbohydrates_cereals->fill($input_menu_carbohydrates_cereals)->save();
        
        $input_menu_carbohydrates_noodles = $request['menu_carbohydrates_noodles'];
        $menu_carbohydrates_noodles->fill($input_menu_carbohydrates_noodles)->save();
        
        $input_menu_bean = $request['menu_bean'];
        $menu_bean ->fill($input_menu_bean)->save();
        
        $input_menu_beef = $request['menu_beef'];
        $menu_beef ->fill($input_menu_beef)->save();
        
        $input_menu_canned_bottled = $request['menu_canned_bottled'];
        $menu_canned_bottled ->fill($input_menu_canned_bottled)->save();
        
        $input_menu_cheese = $request['menu_cheese'];
        $menu_cheese ->fill($input_menu_cheese)->save();
        
        $input_menu_chicken = $request['menu_chicken'];
        $menu_chicken ->fill($input_menu_chicken)->save();
        
        $input_menu_dressing = $request['menu_dressing'];
        $menu_dressing ->fill($input_menu_dressing)->save();
        
        $input_menu_dried_material = $request['menu_dried_material'];
        $menu_dried_material ->fill($input_menu_dried_material)->save();
        
        $input_menu_eggmilk = $request['menu_eggmilk'];
        $menu_eggmilk ->fill($input_menu_eggmilk)->save();
        
        $input_menu_fruits = $request['menu_fruits'];
        $menu_fruits ->fill($input_menu_fruits)->save();
        
        $input_menu_herbs = $request['menu_herbs'];
        $menu_herbs ->fill($input_menu_herbs)->save();
        
        $input_menu_kneaded_material = $request['menu_kneaded_material'];
        $menu_kneaded_material ->fill($input_menu_kneaded_material)->save();
        
        $input_menu_marine_products = $request['menu_marine_products'];
        $menu_marine_products ->fill($input_menu_marine_products)->save();
        
        $input_menu_mushroom = $request['menu_mushroom'];
        $menu_mushroom ->fill($input_menu_mushroom)->save();
        
        $input_menu_mutton = $request['menu_mutton'];
        $menu_mutton ->fill($input_menu_mutton)->save();
        
        $input_menu_oil = $request['menu_oil'];
        $menu_oil ->fill($input_menu_oil)->save();
        
        $input_menu_other_meat = $request['menu_other_meat'];
        $menu_other_meat ->fill($input_menu_other_meat)->save();
        
        $input_menu_pork = $request['menu_pork'];
        $menu_pork ->fill($input_menu_pork)->save();
        
        $input_menu_powders = $request['menu_powders'];
        $menu_powders ->fill($input_menu_powders)->save();
        
        $input_menu_seasoning = $request['menu_seasoning'];
        $menu_seasoning ->fill($input_menu_seasoning)->save();
        
        $input_menu_seaweed = $request['menu_seaweed'];
        $menu_seaweed ->fill($input_menu_seaweed)->save();
        
        $input_menu_shellfish = $request['menu_shellfish'];
        $menu_shellfish ->fill($input_menu_shellfish)->save();
        
        $input_menu_shrimp = $request['menu_shrimp'];
        $menu_shrimp ->fill($input_menu_shrimp)->save();
        
        $input_menu_spices = $request['menu_spices'];
        $menu_spices ->fill($input_menu_spices)->save();
        
        $input_menu_tohunattopickles = $request['menu_tohunattopickles'];
        $menu_tohunattopickles ->fill($input_menu_tohunattopickles)->save();
        
        $input_menu_vegetable = $request['menu_vegetable'];
        $menu_vegetable ->fill($input_menu_vegetable)->save();
        
        $input_menu_yakumi = $request['menu_yakumi'];
        $menu_yakumi ->fill($input_menu_yakumi)->save();
        
        $input_menu = $request['menu'];
        $menu ->fill($input_menu)->save();
        
        return view('template/stored');
        
    }
}
