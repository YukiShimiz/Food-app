<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCannedBottled extends Model
{
    protected $table = 'management_canned_bottled';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
