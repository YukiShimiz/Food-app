<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuOil extends Model
{
    protected $table = 'menu_oil';
    
    protected $fillable = [
        'user_id',
        'flaxseed_oil',
        'egoma_oil',
        'olive_oil',
        'coconut_oil',
        'sesame_oil',
        'corn_oil',
        'salad_oil',
        'rapeseed_oil'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
