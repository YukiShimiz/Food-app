<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCannedBottled extends Model
{
    protected $table = 'menu_canned_bottled';
    
    protected $fillable = [
        'user_id',
        'canned_fish_and_shellfish',
        'canned_fruit'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
