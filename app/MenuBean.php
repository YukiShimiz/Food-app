<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuBean extends Model
{
    protected $table = 'menu_bean';
    
    protected $fillable = [
        'user_id',
        'edamame',
        'soybean',
        'greenpeace',
        'broad_bean',
        'peanut',
        'endomame',
        'green_bean'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
