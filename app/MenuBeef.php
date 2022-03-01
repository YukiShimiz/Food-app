<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuBeef extends Model
{
    protected $table = 'menu_beef';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
