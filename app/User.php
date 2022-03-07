<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function management_bean(){
        return $this->hasOne('App\ManagementBean');
    }
    public function management_carbohydrates_cereals(){
        return $this->hasOne('App\ManagementCarbohydratesCereals');
    }
    
    public function management_carbohydrates_bread(){
        return $this->hasOne('App\ManagementCarbohydratesBread');
    }
    
    public function management(){
        return $this->hasOne('App\ManagementBeef');
        return $this->hasOne('App\ManagementCannedBottled');
    
        
        return $this->hasOne('App\ManagementCarbohydratesNoodles');
        return $this->hasOne('App\ManagementCheese');
        return $this->hasOne('App\ManagementChicken');
        return $this->hasOne('App\ManagementDressing');
        return $this->hasOne('App\ManagementDriedMaterial');
        return $this->hasOne('App\ManagementEggmilk');
        return $this->hasOne('App\ManagementFruits');
        return $this->hasOne('App\ManagementHerbs');
        return $this->hasOne('App\ManagementKneadedMaterial');
        return $this->hasOne('App\ManagementMarineProducts');
        return $this->hasOne('App\ManagementMushroom');
        return $this->hasOne('App\ManagementMutton');
        return $this->hasOne('App\ManagementOil');
        return $this->hasOne('App\ManagementOtherMeat');
        return $this->hasOne('App\ManagementPork');
        return $this->hasOne('App\ManagementPowders');
        return $this->hasOne('App\ManagementSeasoning');
        return $this->hasOne('App\ManagementSeaweed');
        return $this->hasOne('App\ManagementShellfish');
        return $this->hasOne('App\ManagementShrimp');
        return $this->hasOne('App\ManagementSpices');
        return $this->hasOne('App\ManagementTohunattopickles');
        return $this->hasOne('App\ManagementVegetable');
        return $this->hasOne('App\ManagementYakumi');
    }
    
    public function template(){
        return $this->hasMany('App\TemplateBean');
        return $this->hasMany('App\TemplateBeef');
        return $this->hasMany('App\TemplateCannedBottled');
        return $this->hasMany('App\TemplateCarbohydratesBread');
        return $this->hasMany('App\TemplateCarbohydratesCereals');
        return $this->hasMany('App\TemplateCarbohydratesNoodles');
        return $this->hasMany('App\TemplateCheese');
        return $this->hasMany('App\TemplateChicken');
        return $this->hasMany('App\TemplateDressing');
        return $this->hasMany('App\TemplateEggmilk');
        return $this->hasMany('App\TemplateFruits');
        return $this->hasMany('App\TemplateHerbs');
        return $this->hasMany('App\TemplateKneadedMaterial');
        return $this->hasMany('App\TemplateMarineProducts');
        return $this->hasMany('App\TemplateMushroom');
        return $this->hasMany('App\TemplateMutton');
        return $this->hasMany('App\TemplateOil');
        return $this->hasMany('App\TemplateOtherMeat');
        return $this->hasMany('App\TemplatePork');
        return $this->hasMany('App\TemplateSeasoning');
        return $this->hasMany('App\TemplateSeaweed');
        return $this->hasMany('App\TemplateShellfish');
        return $this->hasMany('App\TemplateShrimp');
        return $this->hasMany('App\TemplateSpices');
        return $this->hasMany('App\TemplateTohunattopickles');
        return $this->hasMany('App\TemplateVegetable');
        return $this->hasMany('App\TemplateYakumi');
    }
    
    public function blog(){
        return $this->hasMany('App\Blog');
    }
}