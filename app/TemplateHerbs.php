<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateHerbs extends Model
{
    protected $table = 'template_herbs';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
