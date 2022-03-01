<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplatePork extends Model
{
    protected $table = 'template_pork';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
