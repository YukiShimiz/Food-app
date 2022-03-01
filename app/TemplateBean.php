<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateBean extends Model
{
    protected $table = 'template_bean';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
