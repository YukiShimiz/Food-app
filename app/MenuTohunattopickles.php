<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTohunattopickles extends Model
{
    protected $table = 'menu_tohunattopickles';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
