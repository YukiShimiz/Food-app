<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementOtherMeat extends Model
{
    protected $table = 'management_other_meat';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
