<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateSeasoning extends Model
{
    protected $table = 'template_seasoning';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
