<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    protected $fillable = [
      'user_id','isi'
  ];

  public function user()
  	{
  		return $this->belongsTo('App\User');
  	}
}
