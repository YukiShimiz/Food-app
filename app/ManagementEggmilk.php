<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementEggmilk extends Model
{
    protected $table = 'management_eggmilk';
    
    protected $fillable = [
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
