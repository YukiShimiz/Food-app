<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCarbohydratesBread extends Model
{
    protected $table = 'menu_carbohydrates_bread';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
