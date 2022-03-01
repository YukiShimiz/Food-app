<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementKneadedMaterial extends Model
{
    protected $table = 'management_kneaded_material';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
