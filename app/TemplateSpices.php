<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateSpices extends Model
{
    protected $table = 'template_spices';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
