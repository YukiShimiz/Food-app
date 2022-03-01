<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSpices extends Model
{
    protected $table = 'menu_spices';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
