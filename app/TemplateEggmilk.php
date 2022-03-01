<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateEggmilk extends Model
{
    protected $table = 'template_eggmilk';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
