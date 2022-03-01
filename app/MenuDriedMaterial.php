<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuDriedMaterial extends Model
{
    protected $table = 'menu_dried_material';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
