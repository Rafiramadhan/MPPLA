<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bakpao extends Model
{
  protected $fillable = [
      'jenis_bakpao','harga_bakpao','stok' 
  ];
}
