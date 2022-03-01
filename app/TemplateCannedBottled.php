<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCannedBottled extends Model
{
    protected $table = 'template_canned_bottled';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
