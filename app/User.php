<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    protected $fillable = [
      'nama','kontak','email', 'role' , 'password'
  ];
  	public function pemesanan()
  	{
  		return $this->hasMany('App\Pemesanan');
  	}
  	public function user_detail()
  	{
  		return $this->hasOne('App\UserDetail', 'id', ' user_id');
  	}
  	public function location()
  	{
  		return $this->hasOne('App\Location', 'id', ' user_id');
  	}
  	public function kritik_saran()
  	{
  		return $this->hasMany('App\KritikSaran');
  	}

    public function setAttribute($key, $value)
  {
    $isRememberTokenAttribute = $key == $this->getRememberTokenName();
    if (!$isRememberTokenAttribute)
    {
      parent::setAttribute($key, $value);
    }
  }
  	

}
