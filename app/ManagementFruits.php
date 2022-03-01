<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementFruits extends Model
{
    protected $table = 'management_fruits';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
