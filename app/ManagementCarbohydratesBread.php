<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCarbohydratesBread extends Model
{
    protected $table = 'management_carbohydrates_bread';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
