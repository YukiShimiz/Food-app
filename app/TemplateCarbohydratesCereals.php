<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCarbohydratesCereals extends Model
{
    protected $table = 'template_carbohydrates_cereals';
    
    protected $fillable = [
        'user_id',
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
