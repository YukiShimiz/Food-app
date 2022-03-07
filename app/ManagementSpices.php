<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementSpices extends Model
{
    protected $table = 'management_spices';
    
    protected $fillable = [
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
