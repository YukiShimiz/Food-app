<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuPowders extends Model
{
    protected $table = 'menu_powders';
    
    protected $fillable = [
        'user_id',
        'okonomiyaki_flour',
        'starch',
        'fried_chicken_flour',
        'flour',
        'wheat_germ',
        'rice_flour',
        'cornstarch',
        'buckwheat_flour',
        'takoyaki_flour',
        'tempura_flour',
        'non_fried_flour',
        'bread_crumbs',
        'husuma'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
