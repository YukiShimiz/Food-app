<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCheese extends Model
{
    protected $table = 'template_cheese';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
