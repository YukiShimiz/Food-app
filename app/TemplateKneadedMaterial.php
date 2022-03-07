<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateKneadedMaterial extends Model
{
    protected $table = 'template_kneaded_material';
    
    protected $fillable = [
        'user_id',
        'kamaboko',
        'datemaki',
        'tsumire',
        'namachikuwa',
        'hanpen',
        'yakichikuwa'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
