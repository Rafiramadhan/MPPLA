<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
      'user_id','status','total_harga', 'verified_time' 
  ];
}
