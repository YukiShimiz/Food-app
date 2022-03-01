<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuShellfish extends Model
{
    protected $table = 'menu_shellfish';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
