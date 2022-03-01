<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementChicken extends Model
{
    protected $table = 'management_chicken';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
