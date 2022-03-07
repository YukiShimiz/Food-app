<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateDressing extends Model
{
    protected $table = 'template_dressing';
    
    protected $fillable = [
        'user_id',
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
