<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCannedBottled extends Model
{
    protected $table = 'template_canned_bottled';
    
    protected $fillable = [
        'user_id',
        'canned_fish_and_shellfish',
        'canned_fruit'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
