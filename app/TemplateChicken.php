<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateChicken extends Model
{
    protected $table = 'template_chicken';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
