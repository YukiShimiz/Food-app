<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementYakumi extends Model
{
    protected $table = 'management_yakumi';
    
    protected $fillable = [
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
