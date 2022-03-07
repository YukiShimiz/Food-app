<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementSeaweed extends Model
{
    protected $table = 'management_seaweed';
    
    protected $fillable = [
        'namamekabu',
        'namamozuku',
        'namawakame'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
