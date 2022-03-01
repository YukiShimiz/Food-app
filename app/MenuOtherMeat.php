<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuOtherMeat extends Model
{
    protected $table = 'menu_other_meat';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
