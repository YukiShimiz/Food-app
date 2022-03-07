<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCheese extends Model
{
    protected $table = 'template_cheese';
    
    protected $fillable = [
        'user_id',
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
