<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuVegetable extends Model
{
    protected $table = 'menu_vegetable';
    
    protected $fillable = [
        'user_id',
        'asparagus',
        'pumpkin',
        'cabbage',
        'burdock',
        'satsumaimo',
        'sansai',
        'potato',
        'crowndaisy',
        'garlic',
        'celery',
        'daikon',
        'banboo_shoots',
        'onion',
        'been_seedlings',
        'corn',
        'tomato',
        'eggplant',
        'carrot',
        'green_onion',
        'chinese_cabbage',
        'green_pepper',
        'broccoli',
        'rakkyo',
        'lettuce',
        'lotus_root'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
