<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTohunattopickles extends Model
{
    protected $table = 'menu_tohunattopickles';
    
    protected $fillable = [
        'user_id',
        'atsuage',
        'fried_tohu',
        'salted_plum',
        'kimchi',
        'konjac',
        'zha_cai',
        'shirataki',
        'pickled_radish',
        'tsukudani',
        'tohu',
        'tohuyou',
        'natto',
        'namayuba',
        'menma'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
