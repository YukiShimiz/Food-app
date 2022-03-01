<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementBeef extends Model
{
    protected $table = 'management_beef';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
