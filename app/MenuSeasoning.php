<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSeasoning extends Model
{
    protected $table = 'menu_seasoning';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
