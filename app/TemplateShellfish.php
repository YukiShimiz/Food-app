<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateShellfish extends Model
{
    protected $table = 'template_shellfish';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
