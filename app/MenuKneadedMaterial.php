<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuKneadedMaterial extends Model
{
    protected $table = 'menu_kneaded_material';
    
    protected $fillable = [
        'user_id',
        'kamaboko',
        'datemaki',
        'tsumire',
        'namachikuwa',
        'hanpen',
        'yakichikuwa'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
