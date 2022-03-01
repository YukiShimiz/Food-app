<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuBean extends Model
{
    protected $table = 'menu_bean';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
