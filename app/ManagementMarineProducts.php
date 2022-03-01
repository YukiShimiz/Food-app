<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementMarineProducts extends Model
{
    protected $table = 'management_marine_products';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
