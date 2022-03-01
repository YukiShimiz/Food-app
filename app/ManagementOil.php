<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementOil extends Model
{
    protected $table = 'management_oil';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
