<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCarbohydratesCereals extends Model
{
    protected $table = 'menu_carbohydrates_cereals';
    
    protected $fillable = [
        'user_id',
        'rice',
        'brown_rice',
        'millet',
        'sticky_rice',
        'rice_cake',
        'mochikinchaku',
        'cereal'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
