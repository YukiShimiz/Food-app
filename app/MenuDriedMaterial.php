<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuDriedMaterial extends Model
{
    protected $table = 'menu_dried_material';
    
    protected $fillable = [
        'user_id',
        'green_laver',
        'seasoned_seaweed',
        'katsuobushi',
        'dried_hijiki',
        'dried_beans',
        'dried_vagetables',
        'dried_yuba',
        'dried_seaweed',
        'kanpyo',
        'wood_ear',
        'kinako',
        'kiriboshi_daikon',
        'kuzukiri',
        'kezuribushi',
        'koya_tohu',
        'sesame',
        'dashi_kelp',
        'tororo_kelp',
        'niboshi',
        'harusame',
        'wheat_bran',
        'hurikake',
        'dried_shrimp',
        'grilled_seaweed'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
