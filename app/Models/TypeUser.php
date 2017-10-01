<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
  protected $table='typeUSer';
  protected $primarykey='id';
  protected $fillable=[
  'id','tipo'
  ];
  /*public function user(){
  return $this->hasMany('App\User','id');
}*/
}
