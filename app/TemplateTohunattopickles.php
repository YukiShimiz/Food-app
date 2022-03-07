<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTohunattopickles extends Model
{
    protected $table = 'template_tohunattopickles';
    
    protected $fillable = [
        'user_id',
        'atsuage',
        'fried_tohu',
        'salted_plum',
        'kimchi',
        'konjac',
        'zha_cai',
        'shirataki',
        'pickled_radish',
        'tsukudani',
        'tohu',
        'tohuyou',
        'natto',
        'namayuba',
        'menma'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
