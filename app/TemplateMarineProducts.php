<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateMarineProducts extends Model
{
    protected $table = 'template_marine_products';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
