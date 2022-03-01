<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuFruits extends Model
{
    protected $table = 'menu_fruits';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
