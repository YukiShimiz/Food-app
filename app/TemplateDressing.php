<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateDressing extends Model
{
    protected $table = 'template_dressing';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
