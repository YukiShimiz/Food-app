<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCarbohydratesNoodles extends Model
{
    protected $table = 'management_carbohydrates_noodles';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
