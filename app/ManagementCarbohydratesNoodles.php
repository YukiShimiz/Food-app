<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCarbohydratesNoodles extends Model
{
    protected $table = 'management_carbohydrates_noodles';
    
    protected $fillable = [
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
