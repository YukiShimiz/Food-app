<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementDriedMaterial extends Model
{
    protected $table = 'management_dried_material';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
