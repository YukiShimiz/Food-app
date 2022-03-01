<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuPork extends Model
{
    protected $table = 'menu_pork';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
