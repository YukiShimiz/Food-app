<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementSeasoning extends Model
{
    protected $table = 'management_seasoning';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
