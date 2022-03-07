<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementFruits extends Model
{
    protected $table = 'management_fruits';
    
    protected $fillable = [
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
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
