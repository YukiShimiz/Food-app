<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementPowders extends Model
{
    protected $table = 'management_powders';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
