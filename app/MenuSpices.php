<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSpices extends Model
{
    protected $table = 'menu_spices';
    
    protected $fillable = [
        'user_id',
        'garlic_spice',
        'cumin',
        'pepper',
        'shichimi',
        'cinnamon',
        'turmeric',
        'chili'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
