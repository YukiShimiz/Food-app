<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementSeaweed extends Model
{
    protected $table = 'management_seaweed';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
