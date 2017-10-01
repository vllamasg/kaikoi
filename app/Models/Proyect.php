<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
  protected $table='proyect';
  protected $primarykey='id';
  protected $fillable=[
    'id','name'
  ];

  /*public function expense(){
    return $this->hasMany('App\Models\Expense');
  }*/
}
