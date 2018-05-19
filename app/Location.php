<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
      'user_id','user_latitude','user_longitude' 
  ];

  public function user()
  	{
  		return $this->belongsTo('App\User');
  	}
}
