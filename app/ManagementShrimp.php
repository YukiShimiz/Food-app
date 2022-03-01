<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementShrimp extends Model
{
    protected $table = 'management_shrimp';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
