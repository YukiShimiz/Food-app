<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCarbohydratesNoodles extends Model
{
    protected $table = 'template_carbohydrates_noodles';
    
    protected $fillable = [
        'user_id',
        'udon',
        'somen',
        'soba',
        'pasta',
        'ramen',
        'fried_noodle',
        'tsukemen',
        'hiyamugi',
        'cold_noodle'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
