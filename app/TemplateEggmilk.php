<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateEggmilk extends Model
{
    protected $table = 'template_eggmilk';
    
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
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
