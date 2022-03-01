<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCannedBottled extends Model
{
    protected $table = 'menu_canned_bottled';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
