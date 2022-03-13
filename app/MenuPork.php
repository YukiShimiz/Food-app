<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuPork extends Model
{
    protected $table = 'menu_pork';
    
    protected $fillable = [
        'user_id',
        'pork_minced',
        'pork_shoulder',
        'pork_boston_butt',
        'pork_lose',
        'pork_fillet',
        'pork_ribs',
        'pork_thigh'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
