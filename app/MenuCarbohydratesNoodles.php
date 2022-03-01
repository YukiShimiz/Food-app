<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCarbohydratesNoodles extends Model
{
    protected $table = 'menu_carbohydrates_noodles';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
