<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateSeasoning extends Model
{
    protected $table = 'template_seasoning';
    
    protected $fillable = [
        'user_id',
        'worcestershire_sauce',
        'ketchup',
        'sugar',
        'salt',
        'vinegar',
        'soy_sauce',
        'dashi',
        'ponzu_sauce',
        'mayonnaise',
        'miso',
        'noodle_soup'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
