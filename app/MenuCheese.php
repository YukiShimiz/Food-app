<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCheese extends Model
{
    protected $table = 'menu_cheese';
    
    protected $fillable = [
        'user_id',
        'camembert_cheese',
        'cream_cheese',
        'gorgonzola_cheese',
        'gouda_cheese',
        'cheddar_cheese',
        'mascarpone_cheese',
        'mozzarella_cheese'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
