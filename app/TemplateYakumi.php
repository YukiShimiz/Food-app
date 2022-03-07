<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateYakumi extends Model
{
    protected $table = 'template_yakumi';
    
    protected $fillable = [
        'user_id',
        'oba',
        'ginger',
        'mitsuba',
        'japanese_ginger',
        'yuzu',
        'wasabi'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
