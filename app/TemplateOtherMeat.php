<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateOtherMeat extends Model
{
    protected $table = 'template_other_meat';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
