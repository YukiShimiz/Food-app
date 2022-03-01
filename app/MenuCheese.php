<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCheese extends Model
{
    protected $table = 'menu_cheese';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
