<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
  protected $table='pdf';
  protected $primarykey='id';
  protected $fillable=[
  'id','name'
  ];

  /*public function expense(){
    return $this->hasMany('App\Models\Expense');
  }*/
}
