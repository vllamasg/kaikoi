<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table='image';
  protected $primarykey='id';
  protected $fillable=[
  'id','name'
  ];
/*  public function expense(){
    return $this->hasMany('App\Models\Expense');
  }
  public function user(){
    return $this->hasMany('App\User','id');
  }*/
}
