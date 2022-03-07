<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateVegetable extends Model
{
    protected $table = 'template_vegetable';
    
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
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
