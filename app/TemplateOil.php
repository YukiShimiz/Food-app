<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateOil extends Model
{
    protected $table = 'template_oil';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
