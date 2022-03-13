<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuYakumi extends Model
{
    protected $table = 'menu_yakumi';
    
    protected $fillable = [
        'user_id',
        'oba',
        'ginger',
        'mitsuba',
        'japanese_ginger',
        'yuzu',
        'wasabi'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
