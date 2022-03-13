<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSeasoning extends Model
{
    protected $table = 'menu_seasoning';
    
    protected $fillable = [
        'user_id',
        'worcestershire_sauce',
        'ketchup',
        'sugar',
        'salt',
        'vinegar',
        'soy_sauce',
        'dashi',
        'ponzu_sauce',
        'mayonnaise',
        'miso',
        'noodle_soup'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
