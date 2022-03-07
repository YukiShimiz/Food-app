<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateOtherMeat extends Model
{
    protected $table = 'template_other_meat';
    
    protected $fillable = [
        'user_id',
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
