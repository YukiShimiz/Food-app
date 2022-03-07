<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementBean extends Model
{
    protected $table = 'management_bean';
    
    protected $fillable = [
        'edamame',
        'soybean',
        'greenpeace',
        'broad_bean',
        'peanut',
        'endomame',
        'green_bean'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
