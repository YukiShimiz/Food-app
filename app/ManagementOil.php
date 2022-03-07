<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementOil extends Model
{
    protected $table = 'management_oil';
    
    protected $fillable = [
        'flaxseed_oil',
        'egoma_oil',
        'olive_oil',
        'coconut_oil',
        'sesame_oil',
        'corn_oil',
        'salad_oil',
        'rapeseed_oil'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
