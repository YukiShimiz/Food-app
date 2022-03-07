<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementDressing extends Model
{
    protected $table = 'management_dressing';
    
    protected $fillable = [
        'italian_dressing',
        'green_perilla_dressing',
        'sesame_dressing',
        'caesar_dressing',
        'soy_sauce_dressing',
        'chinese_dressing',
        'french_dressing',
        'wasabi_soy_sauce_dressing'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
