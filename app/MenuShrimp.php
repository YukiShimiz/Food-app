<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuShrimp extends Model
{
    protected $table = 'menu_shrimp';
    
    protected $fillable = [
        'user_id',
        'whiteleg_shrimp',
        'red_shrimp',
        'black_tiger_shrimp',
        'kurumaebi',
        'button_shrimp',
        'sweet_shrimp',
        'shiba_shrimp',
        'sakura_shrimp',
        'spiny_lobster',
        'lobster'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
