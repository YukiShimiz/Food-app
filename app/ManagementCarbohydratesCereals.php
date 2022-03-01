<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCarbohydratesCereals extends Model
{
    protected $table = 'management_carbohydrates_cereals';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}