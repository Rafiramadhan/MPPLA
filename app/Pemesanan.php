<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
      'user_id','status','total_harga', 'verified_time' 
  ];
  	public function item_pemesanan()
  	{
  		return $this->hasMany('App\ItemPemesanan');
  	}

  	public function user()
  	{
  		return $this->belongsTo('App\User');
  	}

}
