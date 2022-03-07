<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateSpices extends Model
{
    protected $table = 'template_spices';
    
    protected $fillable = [
        'user_id',
        'garlic_spice',
        'cumin',
        'pepper',
        'shichimi',
        'cinnamon',
        'turmeric',
        'chili'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
