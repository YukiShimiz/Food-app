<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuYakumi extends Model
{
    protected $table = 'menu_yakumi';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
