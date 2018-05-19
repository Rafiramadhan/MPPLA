<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPemesanan extends Model
{
    protected $fillable = [
      'pemesanan_id','bakpao_id','jumlah' 
  ];

  	public function bakpao()
  	{
  		return $this->belongsTo('App\Bakpao');
  	}
  	public function pemesanan()
  	{
  		return $this->belongsTo('App\Pemesanan');
  	}	
}
