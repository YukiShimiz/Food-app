<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementPowders extends Model
{
    protected $table = 'management_powders';
    
    protected $fillable = [
        'okonomiyaki_flour',
        'starch',
        'fried_chicken_flour',
        'flour',
        'wheat_germ',
        'rice_flour',
        'cornstarch',
        'buckwheat_flour',
        'takoyaki_flour',
        'tempura_flour',
        'non_fried_flour',
        'bread_crumbs',
        'husuma'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
