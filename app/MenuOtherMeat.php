<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuOtherMeat extends Model
{
    protected $table = 'menu_other_meat';
    
    protected $fillable = [
        'user_id',
        'duck_meat',
        'venison',
        'turckey',
        'bacon',
        'ham',
        'sausage'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
