<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuEggmilk extends Model
{
    protected $table = 'menu_eggmilk';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
