<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateMarineProducts extends Model
{
    protected $table = 'template_marine_products';
    
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
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
