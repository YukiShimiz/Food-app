<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuKneadedMaterial extends Model
{
    protected $table = 'menu_kneaded_material';
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
