<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTohunattopickles extends Model
{
    protected $table = 'template_tohunattopickles';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
