<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuVegetable extends Model
{
    protected $table = 'menu_vegetable';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
