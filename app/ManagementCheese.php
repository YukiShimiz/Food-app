<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCheese extends Model
{
    protected $table = 'management_cheese';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
