<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    
    protected $fillable = [
        
        'user_id',
        'title',
        'body'
        
        ];
    
    public function blog(){
        return $this->hasMany('App\Blog');
    }
    
    public function getPaginate(int $limit_count=10){
        return $this->paginate($limit_count);
    }
    
    public function menu_ingredients(){
        return $this->hasOne('App\MenuBean');
        return $this->hasOne('App\MenuBeef');
        return $this->hasOne('App\MenuCannedBottled');
        return $this->hasOne('App\MenuCarbohydratesBread');
        return $this->hasOne('App\MenuCarbohydratesCereals');
        return $this->hasOne('App\MenuCarbohydratesNoodles');
        return $this->hasOne('App\MenuCheese');
        return $this->hasOne('App\MenuChicken');
        return $this->hasOne('App\MenuDressing');
        return $this->hasOne('App\MenuDriedMaterial');
        return $this->hasOne('App\MenuEggmilk');
        return $this->hasOne('App\MenuFruits');
        return $this->hasOne('App\MenuHerbs');
        return $this->hasOne('App\MenuKneadedMaterial');
        return $this->hasOne('App\MenuMarineProducts');
        return $this->hasOne('App\MenuMushroom');
        return $this->hasOne('App\MenuMutton');
        return $this->hasOne('App\MenuOil');
        return $this->hasOne('App\MenuOtherMeat');
        return $this->hasOne('App\MenuPork');
        return $this->hasOne('App\MenuPowders');
        return $this->hasOne('App\MenuSeasoning');
        return $this->hasOne('App\MenuSeaweed');
        return $this->hasOne('App\MenuShellfish');
        return $this->hasOne('App\MenuShrimp');
        return $this->hasOne('App\MenuSpices');
        return $this->hasOne('App\MenuTohunattopickles');
        return $this->hasOne('App\MenuVegetable');
        return $this->hasOne('App\MenuYakumi');
    }
}
