<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateSeaweed extends Model
{
    protected $table = 'template_seaweed';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
