<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementEggmilk extends Model
{
    protected $table = 'management_eggmilk';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
