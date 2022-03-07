<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementOtherMeat extends Model
{
    protected $table = 'management_other_meat';
    
    protected $fillable = [
        'duck_meat',
        'venison',
        'turckey',
        'bacon',
        'ham',
        'sausage'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
