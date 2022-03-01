<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateYakumi extends Model
{
    protected $table = 'template_yakumi';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
