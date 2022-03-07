<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementMarineProducts extends Model
{
    protected $table = 'management_marine_products';
    
    protected $fillable = [
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
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
