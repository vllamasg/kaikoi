<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
  protected $table='expense';
  protected $primarykey='id';
  protected $fillable=[
    'id','name','id_proveedor','id_category','id_pdf','id_xml','id_img','total','id_proyect','id_user'
  ];
  /*public function report(){
    return $this->hasMany('App\Models\Report');
  }
  public function proveedor(){
    return $this->belongsTo('App\Models\Proveedor');
  }
  public function category(){
    return $this->belongsTo('App\Models\Category');
  }
  public function pdf(){
    return $this->belongsTo('App\Models\Pdf');
  }
  public function xml(){
    return $this->belongsTo('App\Models\Xml');
  }
  public function image(){
    return $this->belongsTo('App\Models\Image');
  }
  public function proyect(){
    return $this->belongsTo('App\Models\Proyect');
  }
  public function user(){
    return $this->belongsTo('App\Models\User');
  }*/
}
