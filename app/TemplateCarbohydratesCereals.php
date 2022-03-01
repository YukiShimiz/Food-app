<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCarbohydratesCereals extends Model
{
    protected $table = 'template_carbohydrates_cereals';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
