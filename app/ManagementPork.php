<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementPork extends Model
{
    protected $table = 'management_pork';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
