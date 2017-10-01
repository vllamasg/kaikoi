<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xml extends Model
{
  protected $table='xml';
  protected $primarykey='id';
  protected $fillable=[
  'id','name'
  ];
  /*public function expense(){
    return $this->hasMany('App\Models\Expense');
  }*/
}
