<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
      'nama','kontak','email', 'role' 
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
  	

}
