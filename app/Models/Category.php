<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table='category';
  protected $primarykey='id';
  protected $fillable=[
    'id','name'
  ];

  /*public function expense(){
    return $this->hasMany('App\Models\Expense');
  }*/
}
