<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMutton extends Model
{
    protected $table = 'menu_mutton';
    
    protected $fillable = [
        'user_id',
        'mutton_lose',
        'mutton_shoulder',
        'mutton_boston_butt',
        'mutton_thigh',
        'mutton_ribs'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
