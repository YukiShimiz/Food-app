<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementTohunattopickles extends Model
{
    protected $table = 'management_tohunattopickles';
    
    protected $fillable = [
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
