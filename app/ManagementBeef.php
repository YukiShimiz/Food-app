<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementBeef extends Model
{
    protected $table = 'management_beef';
    
    protected $fillable = [
       'beef_minced',
       'beef_shoulder',
       'beef_boston_butt',
       'beef_ribulose',
       'beef_sirloin',
       'beef_fillet',
       'beef_ribs',
       'beef_thigh',
       'beef_rump',
       'beef_shin',
       'beef_neck'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
