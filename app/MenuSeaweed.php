<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSeaweed extends Model
{
    protected $table = 'menu_seaweed';
    
    protected $fillable = [
        'user_id',
        'namamekabu',
        'namamozuku',
        'namawakame'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
