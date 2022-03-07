<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementShrimp extends Model
{
    protected $table = 'management_shrimp';
    
    protected $fillable = [
        'whiteleg_shrimp',
        'red_shrimp',
        'black_tiger_shrimp',
        'kurumaebi',
        'button_shrimp',
        'sweet_shrimp',
        'shiba_shrimp',
        'sakura_shrimp',
        'spiny_lobster',
        'lobster'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
