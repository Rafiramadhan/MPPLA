<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kritiksaran extends Model
{
  protected $fillable = [
      'id_user','kritik','saran'
  ];
}
