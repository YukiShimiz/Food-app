<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuEggmilk extends Model
{
    protected $table = 'menu_eggmilk';
    
    protected $fillable = [
        'user_id',
        'yogurt',
        'milk',
        'fresh_cream',
        'butter',
        'margarine',
        'egg',
        'quail_egg',
        'century_egg',
        'hot_spring_egg',
        'smoked_egg'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
