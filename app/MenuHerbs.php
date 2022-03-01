<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuHerbs extends Model
{
    protected $table = 'menu_herbs';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
