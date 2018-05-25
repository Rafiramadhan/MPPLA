<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserDetail;
use App\KritikSaran;
use App\Pemesanan;
use Auth;
use App\Location;

class UserController extends Controller
{
    
    public function addLocation(Request $request)
	{
		Location::create([
            'user_id' => $request['user_id'],
            'user_latitude' => $request['user_latitude'],
            'user_longitude' => $request['user_longitude']
        ]);

        return Redirect('penjualan');
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

	public function createUserDummy()
	{
		$user = User::create([
			'nama' => 'byan',
            'kontak' => '082386130150',
            'password' => bcrypt('passwordku'),
            'email' => 'abyandafa@gmail.com',
            'role' => 'Penjual'
			]);

		$user_detail = UserDetail::create([
			'user_id' => $user->id,
            'alamat' => 'bme timur',
            // 'penghasilan_bersih' => $request['penghasilan_bersih'],
            // 'penghasilan_kotor' => $request['penghasilan_kotor'],
            'admin_id' => '11'
			]);
		return dd("success");
	}

	public function getUserTransactionHistory()
	{
		$transaction = Pemesanan::where("user_id", Auth::User()->id)->get();
		dd($transaction);
		dd(Auth::User()->id);

		return dd($transaction);
	}

	public function addKritikSaran(Request $request)
	{
		$user = KritikSaran::create([
			'user_id' => \Auth::user()->id,
            'isi' => $request['isi']
			]);

		return redirect('/indexadmin');
	}

    public function getAllPenjual(Request $request)
    {
        $user = User::get();
        $data = [
            'user' => $user
        ];

        return view('pages.admin.kelolapenjual',$data);
    }

    public function getSpecificPenjual($id)
    {
        $user = User::find($id);
        $data = [
            'penjual' => $user
        ];
        //masukin nama bladenya

        return view('pages.admin.editpenjual', $data);

    }

	public function createPenjual(Request $request)
	{
		$user = User::create([
			'nama' => $request['nama'],
            'kontak' => $request['kontak'],
            'password' => bcrypt($request['password']),
            'email' => $request['email'],
            'role' => 'Penjual'
			]);

		$user_detail = UserDetail::create([
			'user_id' => $user->id,
            'alamat' => $request['alamat'],
            // 'penghasilan_bersih' => $request['penghasilan_bersih'],
            // 'penghasilan_kotor' => $request['penghasilan_kotor'],
            'admin_id' => Auth::User()->id
			]);
		return Redirect('indexadmin');
	}

    public function editPenjual(Request $request)
    {
//        dd($request["jenis_bakpao"]);

        if (User::where('nama', '=', $request['nama'])->count() < 0) {
            $data = array(
                'data' => null,
                'status_code' => 202,
                'message' => "User tidak ditemukan");

        } else {
            $user = User::find($request['id']);
            if($request['nama'] != null) $user->nama = $request['nama'];
            if($request['kontak'] != null) $user->kontak = $request['kontak'];
            if($request['email'] != null) $user->email = $request['email'];
            if($request['password'] != null) $user->stok_bakpao = $request['password'];
            $user->save();
        }

        return redirect('kelolapenjual');
    }


}


