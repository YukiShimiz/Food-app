<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateMushroom extends Model
{
    protected $table = 'template_mushroom';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
