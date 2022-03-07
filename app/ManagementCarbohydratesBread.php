<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCarbohydratesBread extends Model
{
    protected $table = 'management_carbohydrates_bread';
    
    protected $fillable = [
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
