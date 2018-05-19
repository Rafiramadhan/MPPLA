<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
      'user_id','alamat','penghasilan_bersih','penghasilan_kotor','admin_id' 
  ];

  public function user()
  	{
  		return $this->belongsTo('App/User');
  	}
}
