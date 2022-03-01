<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMarineProducts extends Model
{
    protected $table = 'menu_marine_products';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
