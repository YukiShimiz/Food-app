<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMushroom extends Model
{
    protected $table = 'menu_mushroom';
    
    protected $fillable = [
        'user_id',
        'enokitake_red',
        'enokitake_brown',
        'bunashimeji_brown',
        'bunashimeji_white',
        'shitake',
        'king_trumpet',
        'maitake',
        'maitake_white',
        'nameko',
        'mushroom',
        'oyster_mushroom'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
