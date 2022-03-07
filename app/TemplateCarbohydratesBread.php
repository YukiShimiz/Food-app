<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCarbohydratesBread extends Model
{
    protected $table = 'template_carbohydrates_bread';
    
    protected $fillable = [
        'user_id',
        'plain_bread',
        'koppe_bread',
        'croissant',
        'bread_roll',
        'bagel',
        'danish',
        'scone',
        'baguette',
        'batal',
        'naan',
        'grissini',
        'muffin',
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
