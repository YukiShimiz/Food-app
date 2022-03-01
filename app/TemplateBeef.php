<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateBeef extends Model
{
    protected $table = 'template_beef';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
