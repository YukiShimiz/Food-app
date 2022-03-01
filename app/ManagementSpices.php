<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementSpices extends Model
{
    protected $table = 'management_spices';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
