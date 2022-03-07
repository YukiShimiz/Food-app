<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCannedBottled extends Model
{
    protected $table = 'management_canned_bottled';
    
    protected $fillable = [
        'canned_fish_and_shellfish',
        'canned_fruit'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
