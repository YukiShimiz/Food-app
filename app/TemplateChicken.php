<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateChicken extends Model
{
    protected $table = 'template_chicken';
    
    protected $fillable = [
        'user_id',
        'chicken_breast',
        'chicken_thigh',
        'chicken_scissor',
        'chicken_heart',
        'chicken_lever',
        'chicken_sand',
        'chicken_wing',
        'chicken_neck_skin',
        'chicken_cartilage',
        'chicken_tail'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
