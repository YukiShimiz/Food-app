<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateHerbs extends Model
{
    protected $table = 'template_herbs';
    
    protected $fillable = [
        'user_id',
        'coriander',
        'basil',
        'parsley',
        'arugula',
        'lemongrass',
        'rosemary'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
