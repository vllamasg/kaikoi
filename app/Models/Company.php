<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $table='company';
  protected $primarykey='id';
  protected $fillable=[
  'id','name','link'
  ];
  /*public function user(){
    return $this->hasMany('App\User','id');
  }*/
}
