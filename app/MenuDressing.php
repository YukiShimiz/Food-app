<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuDressing extends Model
{
    protected $table = 'menu_dressing';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
