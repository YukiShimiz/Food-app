<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementDressing extends Model
{
    protected $table = 'management_dressing';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
