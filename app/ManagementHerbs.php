<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementHerbs extends Model
{
    protected $table = 'management_herbs';
    
    protected $fillable = [
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
