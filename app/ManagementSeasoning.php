<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementSeasoning extends Model
{
    protected $table = 'management_seasoning';
    
    protected $fillable = [
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
