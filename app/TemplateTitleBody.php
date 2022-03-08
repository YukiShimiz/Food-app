<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTitleBody extends Model
{
    protected $table = 'template_title_body';
    
    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
