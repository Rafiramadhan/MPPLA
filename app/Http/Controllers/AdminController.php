<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KritikSaran;

class AdminController extends Controller
{
    public function getKritikSaran(Request $request)
	{
		$kritik_saran = KritikSaran::all();
		//dd($kritik_saran);
		$data = [
			'kritik_saran' => $kritik_saran 
		];


		return view('pages.admin.lihatkritik', $data);
	}


}
