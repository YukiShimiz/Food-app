<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuShellfish extends Model
{
    protected $table = 'menu_shellfish';
    
    protected $fillable = [
        'user_id',
        'asari',
        'oyster',
        'shijimi',
        'hamaguri',
        'scallop',
        'hard_clam'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
