<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateShrimp extends Model
{
    protected $table = 'template_shrimp';
    
    protected $fillable = [
        'user_id',
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
