<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateShellfish extends Model
{
    protected $table = 'template_shellfish';
    
    protected $fillable = [
        'user_id',
        'asari',
        'oyster',
        'shijimi',
        'hamaguri',
        'scallop',
        'hard_clam'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
