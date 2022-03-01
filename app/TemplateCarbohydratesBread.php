<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCarbohydratesBread extends Model
{
    protected $table = 'template_carbohydrates_bread';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
