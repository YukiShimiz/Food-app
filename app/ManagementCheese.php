<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementCheese extends Model
{
    protected $table = 'management_cheese';
    
    protected $fillable = [
        'camembert_cheese',
        'cream_cheese',
        'gorgonzola_cheese',
        'gouda_cheese',
        'cheddar_cheese',
        'mascarpone_cheese',
        'mozzarella_cheese'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
