<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCarbohydratesNoodles extends Model
{
    protected $table = 'template_carbohydrates_noodles';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
