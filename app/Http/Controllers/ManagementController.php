<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    
    public function create(){
        return view('management/create');
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