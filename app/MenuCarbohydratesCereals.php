<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCarbohydratesCereals extends Model
{
    protected $table = 'menu_carbohydrates_cereals';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
