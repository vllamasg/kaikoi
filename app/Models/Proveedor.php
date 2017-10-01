<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  protected $table='proveedor';
  protected $primarykey='id';
  protected $fillable=[
    'id','name'
  ];

  /*public function expense(){
    return $this->hasMany('App\Models\Expense');
  }*/
}
