<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuFruits extends Model
{
    protected $table = 'menu_fruits';
    
    protected $fillable = [
        'user_id',
        'apricot',
        'strawberry',
        'fig',
        'plum',
        'orange',
        'persimmon',
        'kiwifruit',
        'chestnut',
        'grapefruit',
        'cherry',
        'pomegranate',
        'watermelon',
        'japanese_pear',
        'pear',
        'pineapple',
        'banana',
        'loquat',
        'grape',
        'blueberry',
        'other_berries',
        'mango',
        'mikan',
        'melon',
        'peach',
        'apple',
        'lemon'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
