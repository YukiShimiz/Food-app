<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSeaweed extends Model
{
    protected $table = 'menu_seaweed';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
