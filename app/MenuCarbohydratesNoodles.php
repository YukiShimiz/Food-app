<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCarbohydratesNoodles extends Model
{
    protected $table = 'menu_carbohydrates_noodles';
    
    protected $fillable = [
        'user_id',
        'udon',
        'somen',
        'soba',
        'pasta',
        'ramen',
        'fried_noodle',
        'tsukemen',
        'hiyamugi',
        'cold_noodle'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
