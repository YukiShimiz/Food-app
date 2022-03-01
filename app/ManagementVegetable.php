<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementVegetable extends Model
{
    protected $table = 'management_vegetable';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
