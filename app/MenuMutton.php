<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMutton extends Model
{
    protected $table = 'menu_mutton';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
