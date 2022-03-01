<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateShrimp extends Model
{
    protected $table = 'template_shrimp';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
