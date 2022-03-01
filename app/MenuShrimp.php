<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuShrimp extends Model
{
    protected $table = 'menu_shrimp';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
