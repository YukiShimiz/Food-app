<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCarbohydratesBread extends Model
{
    protected $table = 'menu_carbohydrates_bread';
    
    protected $fillable = [
        'user_id',
        'plain_bread',
        'koppe_bread',
        'croissant',
        'bread_roll',
        'bagel',
        'danish',
        'scone',
        'baguette',
        'batal',
        'naan',
        'grissini',
        'muffin',
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
