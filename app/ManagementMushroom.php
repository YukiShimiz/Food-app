<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementMushroom extends Model
{
    protected $table = 'management_mushroom';
    
    protected $fillable = [
        'enokitake_red',
        'enokitake_brown',
        'bunashimeji_brown',
        'bunashimeji_white',
        'shitake',
        'king_trumpet',
        'maitake',
        'maitake_white',
        'nameko',
        'mushroom',
        'oyster_mushroom'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
