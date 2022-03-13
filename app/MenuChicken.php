<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuChicken extends Model
{
    protected $table = 'menu_chicken';
    
    protected $fillable = [
        'user_id',
        'chicken_breast',
        'chicken_thigh',
        'chicken_scissor',
        'chicken_heart',
        'chicken_lever',
        'chicken_sand',
        'chicken_wing',
        'chicken_neck_skin',
        'chicken_cartilage',
        'chicken_tail'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
