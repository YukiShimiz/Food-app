<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateFruits extends Model
{
    protected $table = 'template_fruits';
    
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
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
