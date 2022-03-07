<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCarbohydratesCereals extends Model
{
    protected $table = 'management_carbohydrates_cereals';
    
    protected $fillable = [
        'rice',
        'brown_rice',
        'millet',
        'sticky_rice',
        'rice_cake',
        'mochikinchaku',
        'cereal'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}