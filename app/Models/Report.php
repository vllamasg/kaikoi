<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  protected $table='report';
  protected $primarykey='id';
  protected $fillable=[
    'id','status','politica','total','id_expenses'
  ];

  /*public function expense(){
    return $this->hasMany('App\Models\Expense');
  }*/
}
