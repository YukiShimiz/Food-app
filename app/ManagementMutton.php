<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementMutton extends Model
{
    protected $table = 'management_mutton';
    
    protected $fillable = [
        'mutton_lose',
        'mutton_shoulder',
        'mutton_boston_butt',
        'mutton_thigh',
        'mutton_ribs'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
