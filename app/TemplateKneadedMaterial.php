<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateKneadedMaterial extends Model
{
    protected $table = 'template_kneaded_material';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
