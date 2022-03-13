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
    
    public function search_management($id,MenuCarbohydratesBread $menu_carbohydrates_bread,
    MenuCarbohydratesCereals $menu_carbohydrates_cereals,MenuCarbohydratesNoodles $menu_carbohydrates_noodles,
    MenuBean $menu_bean,MenuBeef $menu_beef,MenuCannedBottled $menu_canned_bottled,
    MenuCheese $menu_cheese,MenuChicken $menu_chicken,MenuDressing $menu_dressing,
    MenuDriedMaterial $menu_dried_material,MenuEggmilk $menu_eggmilk,MenuFruits $menu_fruits,
    MenuHerbs $menu_herbs,MenuKneadedMaterial $menu_kneaded_material,MenuMarineProducts $menu_marine_products,
    MenuMushroom $menu_mushroom,MenuMutton $menu_mutton,MenuOil $menu_oil,
    MenuOtherMeat $menu_other_meat,MenuPork $menu_pork,MenuPowders $menu_powders,
    MenuSeasoning $menu_seasoning,MenuSeaweed $menu_seaweed,MenuShellfish $menu_shellfish,
    MenuShrimp $menu_shrimp,MenuSpices $menu_spices,MenuTohunattopickles $menu_tohunattopickles,
    MenuVegetable $menu_vegetable,MenuYakumi $menu_yakumi,Menu $menu,
    ManagementCarbohydratesBread $management_carbohydrates_bread,
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
        
        $management_bean=$management_bean->find($id);
        $management_beef=$management_beef->find($id);
        $management_canned_bottled=$management_canned_bottled->find($id);
        $management_carbohydrates_bread=$management_carbohydrates_bread->find($id);
        $management_carbohydrates_cereals=$management_carbohydrates_cereals->find($id);
        $management_carbohydrates_noodles=$management_carbohydrates_noodles->find($id);
        $management_cheese=$management_cheese->find($id);
        $management_chicken=$management_chicken->find($id);
        $management_dressing=$management_dressing->find($id);
        $management_dried_material=$management_dried_material->find($id);
        $management_eggmilk=$management_eggmilk->find($id);
        $management_fruits=$management_fruits->find($id);
        $management_herbs=$management_herbs->find($id);
        $management_kneaded_material=$management_kneaded_material->find($id);
        $management_marine_products=$management_marine_products->find($id);
        $management_mushroom=$management_mushroom->find($id);
        $management_mutton=$management_mutton->find($id);
        $management_oil=$management_oil->find($id);
        $management_other_meat=$management_other_meat->find($id);
        $management_pork=$management_pork->find($id);
        $management_powders=$management_powders->find($id);
        $management_seasoning=$management_seasoning->find($id);
        $management_seaweed=$management_seaweed->find($id);
        $management_shellfish=$management_shellfish->find($id);
        $management_shrimp=$management_shrimp->find($id);
        $management_spices=$management_spices->find($id);
        $management_tohunattopickles=$management_tohunattopickles->find($id);
        $management_vegetable=$management_vegetable->find($id);
        $management_yakumi=$management_yakumi->find($id);
        
        $search_bean = MenuBean::where([
                
                ['edamame','<=',$management_bean['edamame']],
                ['soybean','<=',$management_bean['soybean']],
                ['greenpeace','<=',$management_bean['greenpeace']],
                ['broad_bean','<=',$management_bean['broad_bean']],
                ['peanut','<=',$management_bean['peanut']],
                ['endomame','<=',$management_bean['endomame']],
                ['green_bean','<=',$management_bean['green_bean']]
                
            ])->get('id')->toArray();
            
            foreach($search_bean as $a){
                $id_search_bean[] = $a['id'];
            }
            
        $search_beef = MenuBeef::where([
                
                ['beef_minced','<=',$management_beef['beef_minced']],
                ['beef_shoulder','<=',$management_beef['beef_shoulder']],
                ['beef_boston_butt','<=',$management_beef['beef_boston_butt']],
                ['beef_ribulose','<=',$management_beef['beef_ribulose']],
                ['beef_sirloin','<=',$management_beef['beef_sirloin']],
                ['beef_fillet','<=',$management_beef['beef_boston_butt']],
                ['beef_ribs','<=',$management_beef['beef_ribs']],
                ['beef_thigh','<=',$management_beef['beef_thigh']],
                ['beef_rump','<=',$management_beef['beef_rump']],
                ['beef_shin','<=',$management_beef['beef_shin']],
                ['beef_neck','<=',$management_beef['beef_neck']]
                
            ])->get('id')->toArray();
            
            foreach($search_beef as $a){
                $id_search_beef[] = $a['id'];
            }
            
        $search_canned_bottled = MenuCannedBottled::where([
            
                ['canned_fish_and_shellfish','<=',$management_canned_bottled['canned_fish_and_shellfish']],
                ['canned_fruit','<=',$management_canned_bottled['canned_fruit']]
                
            ])->get('id')->toArray();
            
            foreach($search_canned_bottled as $a){
                $id_search_canned_bottled[] =$a['id'];
            }
        
        $search_carbohydrates_bread = MenuCarbohydratesBread::where([
            
                ['plain_bread','<=',$management_carbohydrates_bread['plain_bread']],
                ['koppe_bread','<=',$management_carbohydrates_bread['koppe_bread']],
                ['croissant','<=',$management_carbohydrates_bread['croissant']],
                ['bread_roll','<=',$management_carbohydrates_bread['bread_roll']],
                ['bagel','<=',$management_carbohydrates_bread['bagel']],
                ['danish','<=',$management_carbohydrates_bread['danish']],
                ['scone','<=',$management_carbohydrates_bread['scone']],
                ['baguette','<=',$management_carbohydrates_bread['baguette']],
                ['batal','<=',$management_carbohydrates_bread['batal']],
                ['naan','<=',$management_carbohydrates_bread['naan']],
                ['grissini','<=',$management_carbohydrates_bread['grissini']],
                ['muffin','<=',$management_carbohydrates_bread['muffin']]
            
            ])->get('id')->toArray();
            
            foreach($search_carbohydrates_bread as $a){
                $id_search_carbohydrates_bread[] = $a['id'];
            }
            
            $search_carbohydrates_cereals = MenuCarbohydratesCereals::where([
            
                ['rice','<=',$management_carbohydrates_cereals['rice']],
                ['brown_rice','<=',$management_carbohydrates_cereals['brown_rice']],
                ['millet','<=',$management_carbohydrates_cereals['millet']],
                ['sticky_rice','<=',$management_carbohydrates_cereals['sticky_rice']],
                ['rice_cake','<=',$management_carbohydrates_cereals['rice_cake']],
                ['mochikinchaku','<=',$management_carbohydrates_cereals['mochikinchaku']],
                ['cereal','<=',$management_carbohydrates_cereals['cereal']]
            
            ])->get('id')->toArray();
            
            foreach($search_carbohydrates_cereals as $a){
                $id_search_carbohydrates_cereals[] = $a['id'];
            }
            
            $search_carbohydrates_noodles = MenuCarbohydratesNoodles::where([
            
                ['udon','<=',$management_carbohydrates_noodles['udon']],
                ['somen','<=',$management_carbohydrates_noodles['somen']],
                ['soba','<=',$management_carbohydrates_noodles['soba']],
                ['pasta','<=',$management_carbohydrates_noodles['pasta']],
                ['ramen','<=',$management_carbohydrates_noodles['ramen']],
                ['fried_noodle','<=',$management_carbohydrates_noodles['fried_noodle']],
                ['tsukemen','<=',$management_carbohydrates_noodles['tsukemen']],
                ['hiyamugi','<=',$management_carbohydrates_noodles['hiyamugi']],
                ['cold_noodle','<=',$management_carbohydrates_noodles['cold_noodle']]
            
            ])->get('id')->toArray();
            
            foreach($search_carbohydrates_noodles as $a){
                $id_search_carbohydrates_noodles[] = $a['id'];
            }
            
            
            $search_cheese = MenuCheese::where([
            
                ['camembert_cheese','<=',$management_cheese['camembert_cheese']],
                ['cream_cheese','<=',$management_cheese['cream_cheese']],
                ['gorgonzola_cheese','<=',$management_cheese['gorgonzola_cheese']],
                ['gouda_cheese','<=',$management_cheese['gouda_cheese']],
                ['cheddar_cheese','<=',$management_cheese['cheddar_cheese']],
                ['mascarpone_cheese','<=',$management_cheese['mascarpone_cheese']],
                ['mozzarella_cheese','<=',$management_cheese['mozzarella_cheese']]
            
            ])->get('id')->toArray();
            
            foreach($search_cheese as $a){
                $id_search_cheese[] = $a['id'];
            }
            
            $search_chicken = MenuChicken::where([
            
                ['chicken_breast','<=',$management_chicken['chicken_breast']],
                ['chicken_thigh','<=',$management_chicken['chicken_thigh']],
                ['chicken_scissor','<=',$management_chicken['chicken_scissor']],
                ['chicken_heart','<=',$management_chicken['chicken_heart']],
                ['chicken_lever','<=',$management_chicken['chicken_lever']],
                ['chicken_sand','<=',$management_chicken['chicken_sand']],
                ['chicken_wing','<=',$management_chicken['chicken_wing']],
                ['chicken_neck_skin','<=',$management_chicken['chicken_neck_skin']],
                ['chicken_cartilage','<=',$management_chicken['chicken_cartilage']],
                ['chicken_tail','<=',$management_chicken['chicken_tail']]
            
            ])->get('id')->toArray();
            
            foreach($search_chicken as $a){
                $id_search_chicken[] = $a['id'];
            }
            
            $search_dressing = MenuDressing::where([
            
                ['italian_dressing','<=',$management_dressing['italian_dressing']],
                ['green_perilla_dressing','<=',$management_dressing['green_perilla_dressing']],
                ['sesame_dressing','<=',$management_dressing['sesame_dressing']],
                ['caesar_dressing','<=',$management_dressing['caesar_dressing']],
                ['soy_sauce_dressing','<=',$management_dressing['soy_sauce_dressing']],
                ['chinese_dressing','<=',$management_dressing['chinese_dressing']],
                ['french_dressing','<=',$management_dressing['french_dressing']],
                ['wasabi_soy_sauce_dressing','<=',$management_dressing['wasabi_soy_sauce_dressing']]
            
            ])->get('id')->toArray();
            
            foreach($search_dressing as $a){
                $id_search_dressing[] = $a['id'];
            }
            
            $search_dried_material = MenuDriedMaterial::where([
            
                ['green_laver','<=',$management_dried_material['green_laver']],
                ['seasoned_seaweed','<=',$management_dried_material['seasoned_seaweed']],
                ['katsuobushi','<=',$management_dried_material['katsuobushi']],
                ['dried_hijiki','<=',$management_dried_material['dried_hijiki']],
                ['dried_beans','<=',$management_dried_material['dried_beans']],
                ['dried_vagetables','<=',$management_dried_material['dried_vagetables']],
                ['dried_yuba','<=',$management_dried_material['dried_yuba']],
                ['dried_seaweed','<=',$management_dried_material['dried_seaweed']],
                ['kanpyo','<=',$management_dried_material['kanpyo']],
                ['wood_ear','<=',$management_dried_material['wood_ear']],
                ['kinako','<=',$management_dried_material['kinako']],
                ['kiriboshi_daikon','<=',$management_dried_material['kiriboshi_daikon']],
                ['kuzukiri','<=',$management_dried_material['kuzukiri']],
                ['kezuribushi','<=',$management_dried_material['kezuribushi']],
                ['koya_tohu','<=',$management_dried_material['koya_tohu']],
                ['sesame','<=',$management_dried_material['sesame']],
                ['dashi_kelp','<=',$management_dried_material['dashi_kelp']],
                ['tororo_kelp','<=',$management_dried_material['tororo_kelp']],
                ['niboshi','<=',$management_dried_material['niboshi']],
                ['harusame','<=',$management_dried_material['harusame']],
                ['wheat_bran','<=',$management_dried_material['wheat_bran']],
                ['hurikake','<=',$management_dried_material['hurikake']],
                ['dried_shrimp','<=',$management_dried_material['dried_shrimp']],
                ['grilled_seaweed','<=',$management_dried_material['grilled_seaweed']]
                
            ])->get('id')->toArray();
            
            foreach($search_dried_material as $a){
                $id_search_dried_material[] = $a['id'];
            }
            
            $search_eggmilk = MenuEggmilk::where([
            
                ['yogurt','<=',$management_eggmilk['yogurt']],
                ['milk','<=',$management_eggmilk['milk']],
                ['fresh_cream','<=',$management_eggmilk['fresh_cream']],
                ['butter','<=',$management_eggmilk['butter']],
                ['margarine','<=',$management_eggmilk['margarine']],
                ['egg','<=',$management_eggmilk['egg']],
                ['quail_egg','<=',$management_eggmilk['quail_egg']],
                ['century_egg','<=',$management_eggmilk['century_egg']],
                ['hot_spring_egg','<=',$management_eggmilk['hot_spring_egg']],
                ['smoked_egg','<=',$management_eggmilk['smoked_egg']]
            
            ])->get('id')->toArray();
            
            foreach($search_eggmilk as $a){
                $id_search_eggmilk[] = $a['id'];
            }
            
            $search_fruits = MenuFruits::where([
            
                ['apricot','<=',$management_fruits['apricot']],
                ['strawberry','<=',$management_fruits['strawberry']],
                ['fig','<=',$management_fruits['fig']],
                ['plum','<=',$management_fruits['plum']],
                ['orange','<=',$management_fruits['orange']],
                ['persimmon','<=',$management_fruits['persimmon']],
                ['kiwifruit','<=',$management_fruits['kiwifruit']],
                ['chestnut','<=',$management_fruits['chestnut']],
                ['grapefruit','<=',$management_fruits['grapefruit']],
                ['cherry','<=',$management_fruits['cherry']],
                ['pomegranate','<=',$management_fruits['pomegranate']],
                ['watermelon','<=',$management_fruits['watermelon']],
                ['japanese_pear','<=',$management_fruits['japanese_pear']],
                ['pear','<=',$management_fruits['pear']],
                ['pineapple','<=',$management_fruits['pineapple']],
                ['banana','<=',$management_fruits['banana']],
                ['loquat','<=',$management_fruits['loquat']],
                ['grape','<=',$management_fruits['grape']],
                ['blueberry','<=',$management_fruits['blueberry']],
                ['other_berries','<=',$management_fruits['other_berries']],
                ['mango','<=',$management_fruits['mango']],
                ['mikan','<=',$management_fruits['mikan']],
                ['melon','<=',$management_fruits['melon']],
                ['peach','<=',$management_fruits['peach']],
                ['apple','<=',$management_fruits['apple']],
                ['lemon','<=',$management_fruits['lemon']]
            
            ])->get('id')->toArray();
            
            foreach($search_fruits as $a){
                $id_search_fruits[] = $a['id'];
            }
            
            $search_herbs = MenuHerbs::where([
            
                ['coriander','<=',$management_herbs['coriander']],
                ['basil','<=',$management_herbs['basil']],
                ['parsley','<=',$management_herbs['parsley']],
                ['arugula','<=',$management_herbs['arugula']],
                ['lemongrass','<=',$management_herbs['lemongrass']],
                ['rosemary','<=',$management_herbs['rosemary']]
            
            ])->get('id')->toArray();
            
            foreach($search_herbs as $a){
                $id_search_herbs[] = $a['id'];
            }
            
            $search_kneaded_material = MenuKneadedMaterial::where([
            
                ['kamaboko','<=',$management_kneaded_material['kamaboko']],
                ['datemaki','<=',$management_kneaded_material['datemaki']],
                ['tsumire','<=',$management_kneaded_material['tsumire']],
                ['namachikuwa','<=',$management_kneaded_material['namachikuwa']],
                ['hanpen','<=',$management_kneaded_material['hanpen']],
                ['yakichikuwa','<=',$management_kneaded_material['yakichikuwa']]
            
            ])->get('id')->toArray();
            
            foreach($search_kneaded_material as $a){
                $id_search_kneaded_material[] = $a['id'];
            }
            
            $search_marine_products = MenuMarineProducts::where([
            
                ['horse_mackerel','<=',$management_marine_products['horse_mackerel']],
                ['anago','<=',$management_marine_products['anago']],
                ['squid','<=',$management_marine_products['squid']],
                ['ikura','<=',$management_marine_products['ikura']],
                ['sardine','<=',$management_marine_products['sardine']],
                ['unagi','<=',$management_marine_products['unagi']],
                ['sea_urchin','<=',$management_marine_products['sea_urchin']],
                ['herring_roe','<=',$management_marine_products['herring_roe']],
                ['skipjack','<=',$management_marine_products['skipjack']],
                ['crab','<=',$management_marine_products['crab']],
                ['salmon','<=',$management_marine_products['salmon']],
                ['mackerel','<=',$management_marine_products['mackerel']],
                ['pacific_saury','<=',$management_marine_products['pacific_saury']],
                ['shishamo','<=',$management_marine_products['shishamo']],
                ['shirasu','<=',$management_marine_products['shirasu']],
                ['sujiko','<=',$management_marine_products['sujiko']],
                ['sea_bream','<=',$management_marine_products['sea_bream']],
                ['octopus','<=',$management_marine_products['octopus']],
                ['cod','<=',$management_marine_products['cod']],
                ['tarako','<=',$management_marine_products['tarako']],
                ['chirimen','<=',$management_marine_products['chirimen']],
                ['puffer_fish','<=',$management_marine_products['puffer_fish']],
                ['hokke','<=',$management_marine_products['hokke']],
                ['tuna','<=',$management_marine_products['tuna']],
                ['mentaiko','<=',$management_marine_products['mentaiko']]
            
            ])->get('id')->toArray();
            
            foreach($search_marine_products as $a){
                $id_search_marine_products[] = $a['id'];
            }
            
            $search_mushroom = MenuMushroom::where([
            
                ['enokitake_red','<=',$management_mushroom['enokitake_red']],
                ['enokitake_brown','<=',$management_mushroom['enokitake_brown']],
                ['bunashimeji_brown','<=',$management_mushroom['bunashimeji_brown']],
                ['bunashimeji_white','<=',$management_mushroom['bunashimeji_white']],
                ['shitake','<=',$management_mushroom['shitake']],
                ['king_trumpet','<=',$management_mushroom['king_trumpet']],
                ['maitake','<=',$management_mushroom['maitake']],
                ['maitake_white','<=',$management_mushroom['maitake_white']],
                ['nameko','<=',$management_mushroom['nameko']],
                ['mushroom','<=',$management_mushroom['mushroom']],
                ['oyster_mushroom','<=',$management_mushroom['oyster_mushroom']]
            
            ])->get('id')->toArray();
            
            foreach($search_mushroom as $a){
                $id_search_mushroom[] = $a['id'];
            }
            
            $search_mutton = MenuMutton::where([
            
                ['mutton_lose','<=',$management_mutton['mutton_lose']],
                ['mutton_shoulder','<=',$management_mutton['mutton_shoulder']],
                ['mutton_boston_butt','<=',$management_mutton['mutton_boston_butt']],
                ['mutton_thigh','<=',$management_mutton['mutton_thigh']],
                ['mutton_ribs','<=',$management_mutton['mutton_ribs']]
            
            ])->get('id')->toArray();
            
            foreach($search_mutton as $a){
                $id_search_mutton[] = $a['id'];
            }
            
            $search_oil = MenuOil::where([
            
                ['flaxseed_oil','<=',$management_oil['flaxseed_oil']],
                ['egoma_oil','<=',$management_oil['egoma_oil']],
                ['olive_oil','<=',$management_oil['olive_oil']],
                ['coconut_oil','<=',$management_oil['coconut_oil']],
                ['sesame_oil','<=',$management_oil['sesame_oil']],
                ['corn_oil','<=',$management_oil['corn_oil']],
                ['salad_oil','<=',$management_oil['salad_oil']],
                ['rapeseed_oil','<=',$management_oil['rapeseed_oil']]
            
            ])->get('id')->toArray();
            
            foreach($search_oil as $a){
                $id_search_oil[] = $a['id'];
            }
            
            $search_other_meat = MenuOtherMeat::where([
            
                ['duck_meat','<=',$management_other_meat['duck_meat']],
                ['venison','<=',$management_other_meat['venison']],
                ['turckey','<=',$management_other_meat['turckey']],
                ['bacon','<=',$management_other_meat['bacon']],
                ['ham','<=',$management_other_meat['ham']],
                ['sausage','<=',$management_other_meat['sausage']]
            
            ])->get('id')->toArray();
            
            foreach($search_other_meat as $a){
                $id_search_other_meat[] = $a['id'];
            }
            
            $search_pork = MenuPork::where([
            
                ['pork_minced','<=',$management_pork['pork_minced']],
                ['pork_shoulder','<=',$management_pork['pork_shoulder']],
                ['pork_boston_butt','<=',$management_pork['pork_boston_butt']],
                ['pork_lose','<=',$management_pork['pork_lose']],
                ['pork_fillet','<=',$management_pork['pork_fillet']],
                ['pork_ribs','<=',$management_pork['pork_ribs']],
                ['pork_thigh','<=',$management_pork['pork_thigh']]
            
            ])->get('id')->toArray();
            
            foreach($search_pork as $a){
                $id_search_pork[] = $a['id'];
            }
            
            $search_powders = MenuPowders::where([
            
                ['okonomiyaki_flour','<=',$management_powders['okonomiyaki_flour']],
                ['starch','<=',$management_powders['starch']],
                ['fried_chicken_flour','<=',$management_powders['fried_chicken_flour']],
                ['flour','<=',$management_powders['flour']],
                ['wheat_germ','<=',$management_powders['wheat_germ']],
                ['rice_flour','<=',$management_powders['rice_flour']],
                ['cornstarch','<=',$management_powders['cornstarch']],
                ['buckwheat_flour','<=',$management_powders['buckwheat_flour']],
                ['takoyaki_flour','<=',$management_powders['takoyaki_flour']],
                ['tempura_flour','<=',$management_powders['tempura_flour']],
                ['non_fried_flour','<=',$management_powders['non_fried_flour']],
                ['bread_crumbs','<=',$management_powders['bread_crumbs']],
                ['husuma','<=',$management_powders['husuma']]
            
            ])->get('id')->toArray();
            
            foreach($search_powders as $a){
                $id_search_powders[] = $a['id'];
            }
            
            $search_seasoning = MenuSeasoning::where([
            
                ['worcestershire_sauce','<=',$management_seasoning['worcestershire_sauce']],
                ['ketchup','<=',$management_seasoning['ketchup']],
                ['sugar','<=',$management_seasoning['sugar']],
                ['salt','<=',$management_seasoning['salt']],
                ['vinegar','<=',$management_seasoning['vinegar']],
                ['soy_sauce','<=',$management_seasoning['soy_sauce']],
                ['dashi','<=',$management_seasoning['dashi']],
                ['ponzu_sauce','<=',$management_seasoning['ponzu_sauce']],
                ['mayonnaise','<=',$management_seasoning['mayonnaise']],
                ['miso','<=',$management_seasoning['miso']],
                ['noodle_soup','<=',$management_seasoning['noodle_soup']]
            
            ])->get('id')->toArray();
            
            foreach($search_seasoning as $a){
                $id_search_seasoning[] = $a['id'];
            }
            
            $search_seaweed = MenuSeaweed::where([
            
                ['namamekabu','<=',$management_seaweed['namamekabu']],
                ['namamozuku','<=',$management_seaweed['namamozuku']],
                ['namawakame','<=',$management_seaweed['namawakame']]
            
            ])->get('id')->toArray();
            
            foreach($search_seaweed as $a){
                $id_search_seaweed[] = $a['id'];
            }
            
            $search_shellfish = MenuShellfish::where([
            
                ['asari','<=',$management_shellfish['asari']],
                ['oyster','<=',$management_shellfish['oyster']],
                ['shijimi','<=',$management_shellfish['shijimi']],
                ['hamaguri','<=',$management_shellfish['hamaguri']],
                ['scallop','<=',$management_shellfish['scallop']],
                ['hard_clam','<=',$management_shellfish['hard_clam']]
            
            ])->get('id')->toArray();
            
            foreach($search_shellfish as $a){
                $id_search_shellfish[] = $a['id'];
            }
            
            $search_shrimp = MenuShrimp::where([
            
                ['whiteleg_shrimp','<=',$management_shrimp['whiteleg_shrimp']],
                ['red_shrimp','<=',$management_shrimp['red_shrimp']],
                ['black_tiger_shrimp','<=',$management_shrimp['black_tiger_shrimp']],
                ['kurumaebi','<=',$management_shrimp['kurumaebi']],
                ['button_shrimp','<=',$management_shrimp['button_shrimp']],
                ['sweet_shrimp','<=',$management_shrimp['sweet_shrimp']],
                ['shiba_shrimp','<=',$management_shrimp['shiba_shrimp']],
                ['sakura_shrimp','<=',$management_shrimp['sakura_shrimp']],
                ['spiny_lobster','<=',$management_shrimp['spiny_lobster']],
                ['lobster','<=',$management_shrimp['lobster']]
            
            ])->get('id')->toArray();
            
            foreach($search_shrimp as $a){
                $id_search_shrimp[] = $a['id'];
            }
            
            $search_spices = MenuSpices::where([
            
                ['garlic_spice','<=',$management_spices['garlic_spice']],
                ['cumin','<=',$management_spices['cumin']],
                ['pepper','<=',$management_spices['pepper']],
                ['shichimi','<=',$management_spices['shichimi']],
                ['cinnamon','<=',$management_spices['cinnamon']],
                ['turmeric','<=',$management_spices['turmeric']],
                ['chili','<=',$management_spices['chili']]
            
            ])->get('id')->toArray();
            
            foreach($search_spices as $a){
                $id_search_spices[] = $a['id'];
            }
            
            $search_tohunattopickles = MenuTohunattopickles::where([
            
                ['atsuage','<=',$management_tohunattopickles['atsuage']],
                ['fried_tohu','<=',$management_tohunattopickles['fried_tohu']],
                ['salted_plum','<=',$management_tohunattopickles['salted_plum']],
                ['kimchi','<=',$management_tohunattopickles['kimchi']],
                ['konjac','<=',$management_tohunattopickles['konjac']],
                ['zha_cai','<=',$management_tohunattopickles['zha_cai']],
                ['shirataki','<=',$management_tohunattopickles['shirataki']],
                ['pickled_radish','<=',$management_tohunattopickles['pickled_radish']],
                ['tsukudani','<=',$management_tohunattopickles['tsukudani']],
                ['tohu','<=',$management_tohunattopickles['tohu']],
                ['tohuyou','<=',$management_tohunattopickles['tohuyou']],
                ['natto','<=',$management_tohunattopickles['natto']],
                ['namayuba','<=',$management_tohunattopickles['namayuba']],
                ['menma','<=',$management_tohunattopickles['menma']]
            
            ])->get('id')->toArray();
            
            foreach($search_tohunattopickles as $a){
                $id_search_tohunattopickles[] = $a['id'];
            }
            
            $search_vegetable = MenuVegetable::where([
            
                ['asparagus','<=',$management_vegetable['asparagus']],
                ['pumpkin','<=',$management_vegetable['pumpkin']],
                ['cabbage','<=',$management_vegetable['cabbage']],
                ['burdock','<=',$management_vegetable['burdock']],
                ['satsumaimo','<=',$management_vegetable['satsumaimo']],
                ['sansai','<=',$management_vegetable['sansai']],
                ['potato','<=',$management_vegetable['potato']],
                ['crowndaisy','<=',$management_vegetable['crowndaisy']],
                ['garlic','<=',$management_vegetable['garlic']],
                ['celery','<=',$management_vegetable['celery']],
                ['daikon','<=',$management_vegetable['daikon']],
                ['banboo_shoots','<=',$management_vegetable['banboo_shoots']],
                ['onion','<=',$management_vegetable['onion']],
                ['been_seedlings','<=',$management_vegetable['been_seedlings']],
                ['corn','<=',$management_vegetable['corn']],
                ['tomato','<=',$management_vegetable['tomato']],
                ['eggplant','<=',$management_vegetable['eggplant']],
                ['carrot','<=',$management_vegetable['carrot']],
                ['green_onion','<=',$management_vegetable['green_onion']],
                ['chinese_cabbage','<=',$management_vegetable['chinese_cabbage']],
                ['green_pepper','<=',$management_vegetable['green_pepper']],
                ['broccoli','<=',$management_vegetable['broccoli']],
                ['rakkyo','<=',$management_vegetable['rakkyo']],
                ['lettuce','<=',$management_vegetable['lettuce']],
                ['lotus_root','<=',$management_vegetable['lotus_root']]
            
            ])->get('id')->toArray();
            
            foreach($search_vegetable as $a){
                $id_search_vegetable[] = $a['id'];
            }
            
            $search_yakumi = MenuYakumi::where([
            
                ['oba','<=',$management_yakumi['oba']],
                ['ginger','<=',$management_yakumi['ginger']],
                ['mitsuba','<=',$management_yakumi['mitsuba']],
                ['japanese_ginger','<=',$management_yakumi['japanese_ginger']],
                ['yuzu','<=',$management_yakumi['yuzu']],
                ['wasabi','<=',$management_yakumi['wasabi']]
            
            ])->get('id')->toArray();
            
            foreach($search_yakumi as $a){
                $id_search_yakumi[] = $a['id'];
            }
            
            $results = array_intersect($id_search_bean,$id_search_beef,
            $id_search_canned_bottled,$id_search_carbohydrates_bread,$id_search_carbohydrates_cereals,
            $id_search_carbohydrates_noodles,$id_search_cheese,$id_search_chicken,$id_search_dressing,
            $id_search_dried_material,$id_search_eggmilk,$id_search_fruits,$id_search_herbs,
            $id_search_kneaded_material,$id_search_marine_products,$id_search_mushroom,
            $id_search_mutton,$id_search_oil,$id_search_other_meat,$id_search_pork,$id_search_powders,
            $id_search_seasoning,$id_search_seaweed,$id_search_shellfish,$id_search_shrimp,
            $id_search_spices,$id_search_tohunattopickles,$id_search_vegetable,$id_search_yakumi);
            
        
        return view('menu/index')->with(['results'=>$results])->with(['menu'=>$menu->getPaginate()]);
        
    }
    
    public function show($id,MenuCarbohydratesBread $menu_carbohydrates_bread,
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
        
        $menu_bean=$menu_bean->find($id);
        $menu_beef=$menu_beef->find($id);
        $menu_canned_bottled=$menu_canned_bottled->find($id);
        $menu_carbohydrates_bread=$menu_carbohydrates_bread->find($id);
        $menu_carbohydrates_cereals=$menu_carbohydrates_cereals->find($id);
        $menu_carbohydrates_noodles=$menu_carbohydrates_noodles->find($id);
        $menu_cheese=$menu_cheese->find($id);
        $menu_chicken=$menu_chicken->find($id);
        $menu_dressing=$menu_dressing->find($id);
        $menu_dried_material=$menu_dried_material->find($id);
        $menu_eggmilk=$menu_eggmilk->find($id);
        $menu_fruits=$menu_fruits->find($id);
        $menu_herbs=$menu_herbs->find($id);
        $menu_kneaded_material=$menu_kneaded_material->find($id);
        $menu_marine_products=$menu_marine_products->find($id);
        $menu_mushroom=$menu_mushroom->find($id);
        $menu_mutton=$menu_mutton->find($id);
        $menu_oil=$menu_oil->find($id);
        $menu_other_meat=$menu_other_meat->find($id);
        $menu_pork=$menu_pork->find($id);
        $menu_powders=$menu_powders->find($id);
        $menu_seasoning=$menu_seasoning->find($id);
        $menu_seaweed=$menu_seaweed->find($id);
        $menu_shellfish=$menu_shellfish->find($id);
        $menu_shrimp=$menu_shrimp->find($id);
        $menu_spices=$menu_spices->find($id);
        $menu_tohunattopickles=$menu_tohunattopickles->find($id);
        $menu_vegetable=$menu_vegetable->find($id);
        $menu_yakumi=$menu_yakumi->find($id);
        $menu=$menu->find($id);
        
        
        return view('menu/show')->with(['id'=>$id])
        ->with(['menu_carbohydrates_bread'=>$menu_carbohydrates_bread])
        ->with(['menu_carbohydrates_cereals'=>$menu_carbohydrates_cereals])
        ->with(['menu_carbohydrates_noodles'=>$menu_carbohydrates_noodles])
        ->with(['menu_bean'=>$menu_bean])
        ->with(['menu_beef'=>$menu_beef])
        ->with(['menu_canned_bottled'=>$menu_canned_bottled])
        ->with(['menu_cheese'=>$menu_cheese])
        ->with(['menu_chicken'=>$menu_chicken])
        ->with(['menu_dressing'=>$menu_dressing])
        ->with(['menu_dried_material'=>$menu_dried_material])
        ->with(['menu_eggmilk'=>$menu_eggmilk])
        ->with(['menu_fruits'=>$menu_fruits])
        ->with(['menu_herbs'=>$menu_herbs])
        ->with(['menu_kneaded_material'=>$menu_kneaded_material])
        ->with(['menu_marine_products'=>$menu_marine_products])
        ->with(['menu_mushroom'=>$menu_mushroom])
        ->with(['menu_mutton'=>$menu_mutton])
        ->with(['menu_oil'=>$menu_oil])
        ->with(['menu_other_meat'=>$menu_other_meat])
        ->with(['menu_pork'=>$menu_pork])
        ->with(['menu_powders'=>$menu_powders])
        ->with(['menu_seasoning'=>$menu_seasoning])
        ->with(['menu_seaweed'=>$menu_seaweed])
        ->with(['menu_shellfish'=>$menu_shellfish])
        ->with(['menu_shrimp'=>$menu_shrimp])
        ->with(['menu_spices'=>$menu_spices])
        ->with(['menu_tohunattopickles'=>$menu_tohunattopickles])
        ->with(['menu_vegetable'=>$menu_vegetable])
        ->with(['menu_yakumi'=>$menu_yakumi])
        ->with(['menu'=>$menu]);
    }
    
}
