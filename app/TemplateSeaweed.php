<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateSeaweed extends Model
{
    protected $table = 'template_seaweed';
    
    protected $fillable = [
        'user_id',
        'namamekabu',
        'namamozuku',
        'namawakame'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
