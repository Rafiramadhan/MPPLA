<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserDetail;
use App\KritikSaran;

class UserController extends Controller
{
    
    public function addLocation(Request $request)
	{
		return Location::create([
            'user_id' => $request['user_id'],
            'user_latitude' => $request['user_latitude'],
            'user_longitude' => $request['user_longitude']
        ]);
	}

	public function getUserLocation(Request $request)
	{
		return Location::where('user_id','=',$request['user_id'])->get();
	}

	public function createUser(Request $request)
	{
		$user = User::create([
			'nama' => $request['nama'],
            'kontak' => $request['kontak'],
            'email' => $request['email'],
            'role' => 'Penjual'
			]);

		$user_detail = UserDetail::create([
			'user_id' => $user->id,
            'alamat' => $request['alamat'],
            'penghasilan_bersih' => $request['penghasilan_bersih'],
            'penghasilan_kotor' => $request['penghasilan_kotor'],
            'admin_id' => $request['admin_id']
			]);
	}

	public function getUserTransactionHistory(Request $request)
	{
		
	}

	public function addKritikSaran(Request $request)
	{
		$user = KritikSaran::create([
			'user_id' => $request['user_id'],
            'isi' => $request['isi']
			]);
	}

	public function addKritikSaran(Request $request)
	{
		$kritik_saran = KritikSaran::create([
			'user_id' => $request['user_id'],
            'isi' => $request['isi']
			]);
	}

}
