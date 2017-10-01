<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';
    protected $primarykey='id';
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password', 'id_tipo', 'id_img', 'id_company'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*public function tipo(){
      return $this->belongsTo('App\Models\TypeUser','id_tipo');
    }
    public function image(){
    return $this->belongsTo('App\Models\Image', 'id_image');
    }
    public function company(){
    return $this->belongsTo('App\Models\Company', 'id_company');
    }
    public function expense(){
    return $this->hasMany('App\Models\Expense', 'id_user');
  }*/
}
