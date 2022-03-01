<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateMutton extends Model
{
    protected $table = 'template_mutton';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
