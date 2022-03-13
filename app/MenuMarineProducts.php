<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMarineProducts extends Model
{
    protected $table = 'menu_marine_products';
    
    protected $fillable = [
        'user_id',
        'horse_mackerel',
        'anago',
        'squid',
        'ikura',
        'sardine',
        'unagi',
        'sea_urchin',
        'herring_roe',
        'skipjack',
        'crab',
        'salmon',
        'mackerel',
        'pacific_saury',
        'shishamo',
        'shirasu',
        'sujiko',
        'sea_bream',
        'octopus',
        'cod',
        'tarako',
        'chirimen',
        'puffer_fish',
        'hokke',
        'tuna',
        'mentaiko'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
