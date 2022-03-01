<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementShellfish extends Model
{
    protected $table = 'management_shellfish';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
