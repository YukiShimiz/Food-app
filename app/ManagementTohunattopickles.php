<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementTohunattopickles extends Model
{
    protected $table = 'management_tohunattopickles';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
