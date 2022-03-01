<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuOil extends Model
{
    protected $table = 'menu_oil';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
