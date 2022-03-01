<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementBean extends Model
{
    protected $table = 'management_bean';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
