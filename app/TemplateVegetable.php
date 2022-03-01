<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateVegetable extends Model
{
    protected $table = 'template_vegetable';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
