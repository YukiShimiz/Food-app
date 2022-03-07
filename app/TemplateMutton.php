<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateMutton extends Model
{
    protected $table = 'template_mutton';
    
    protected $fillable = [
        'user_id',
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
