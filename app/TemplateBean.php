<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateBean extends Model
{
    protected $table = 'template_bean';
    
    protected $fillable = [
        'user_id',
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
