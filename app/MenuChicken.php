<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuChicken extends Model
{
    protected $table = 'menu_chicken';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
