<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
  protected $table='account';
  protected $primarykey='id';
  public $timestamps=false;
  protected $fillable = [
      'id','name', 'email','id_tipo','id_img','id_company','creation'
  ];
}
