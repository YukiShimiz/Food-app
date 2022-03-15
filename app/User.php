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
    
    public function template_bean(){
        return $this->hasMany('App\TemplateBean');
    }
    public function template_beef(){
        return $this->hasMany('App\TemplateBeef');
    }
    public function template_canned_bottled(){
        return $this->hasMany('App\TemplateCannedBottled');
    }
    public function template_carbohydrates_bread(){
        return $this->hasMany('App\TemplateCarbohydratesBread');
    }
    public function template_carbohydrates_cereals(){
        return $this->hasMany('App\TemplateCarbohydratesCereals');
    }
    public function template_carbohydrates_noodles(){
        return $this->hasMany('App\TemplateCarbohydratesNoodles');
    }
    public function template_cheese(){
        return $this->hasMany('App\TemplateCheese');
    }
    public function template_chicken(){
        return $this->hasMany('App\TemplateChicken');
    }
    public function template_dressing(){
        return $this->hasMany('App\TemplateDressing');
    }
    public function template(){
        return $this->hasMany('App\TemplateDriedMaterial');
    }
    public function template_eggmilk(){
        return $this->hasMany('App\TemplateEggmilk');
    }
    public function template_fruits(){
        return $this->hasMany('App\TemplateFruits');
    }
    public function template_herbs(){
        return $this->hasMany('App\TemplateHerbs');
    }
    public function template_kneaded_material(){
        return $this->hasMany('App\TemplateKneadedMaterial');
    }
    public function template_marine_products(){
        return $this->hasMany('App\TemplateMarineProducts');
    }
    public function template_mushroom(){
        return $this->hasMany('App\TemplateMushroom');
    }
    public function template_mutton(){
        return $this->hasMany('App\TemplateMutton');
    }
    public function template_oil(){
        return $this->hasMany('App\TemplateOil');
    }
    public function template_other_meat(){
        return $this->hasMany('App\TemplateOtherMeat');
    }
    public function template_pork(){
        return $this->hasMany('App\TemplatePork');
    }
    public function template_powders(){
        return $this->hasMany('App\TemplatePowders');
    }
    public function template_seasoning(){
        return $this->hasMany('App\TemplateSeasoning');
    }
    public function template_seaweed(){
        return $this->hasMany('App\TemplateSeaweed');
    }
    public function template_shellfish(){
        return $this->hasMany('App\TemplateShellfish');
    }
    public function template_shrimp(){
        return $this->hasMany('App\TemplateShrimp');
    }
    public function template_spices(){
        return $this->hasMany('App\TemplateSpices');
    }
    public function template_tohunattopickles(){
        return $this->hasMany('App\TemplateTohunattopickles');
    }
    public function template_vegetable(){
        return $this->hasMany('App\TemplateVegetable');
    }
    public function template_yakumi(){
        return $this->hasMany('App\TemplateYakumi');
    }
    
    public function template_title_body(){
        return $this->hasMany('App\TemplateTitleBody');   
    }
    
    public function getByTemplate(int $limit_count=10){
        return $this->template_title_body()->orderBy('updated_at','desc')->paginate($limit_count);
    }
    
    public function getByBlog(int $limit_count=10){
        return $this->blog()->orderBy('created_at','desc')->paginate($limit_count);
    }
    
    public function blog(){
        return $this->hasMany('App\Blog');
    }
}