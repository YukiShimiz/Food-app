<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementPork extends Model
{
    protected $table = 'management_pork';
    
    protected $fillable = [
        'pork_minced',
        'pork_shoulder',
        'pork_boston_butt',
        'pork_lose',
        'pork_fillet',
        'pork_ribs',
        'pork_thigh'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
