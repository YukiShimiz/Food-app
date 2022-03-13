<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuHerbs extends Model
{
    protected $table = 'menu_herbs';
    
    protected $fillable = [
        'user_id',
        'coriander',
        'basil',
        'parsley',
        'arugula',
        'lemongrass',
        'rosemary'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
