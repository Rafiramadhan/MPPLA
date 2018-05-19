<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bakpao extends Model
{
  protected $fillable = [
      'jenis_bakpao','harga_bakpao','stok_bakpao' 
  ];

  public function item_pemesanan()
  	{
  		return $this->hasMany('App\Pemesanan');
  	}
}
