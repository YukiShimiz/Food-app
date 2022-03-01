<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMushroom extends Model
{
    protected $table = 'menu_mushroom';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
