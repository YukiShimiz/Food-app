<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementMutton extends Model
{
    protected $table = 'management_mutton';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
