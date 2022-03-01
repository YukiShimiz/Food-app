<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuPowders extends Model
{
    protected $table = 'menu_powders';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
