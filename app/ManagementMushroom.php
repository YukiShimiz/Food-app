<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementMushroom extends Model
{
    protected $table = 'management_mushroom';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
