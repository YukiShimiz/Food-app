<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementYakumi extends Model
{
    protected $table = 'management_yakumi';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
