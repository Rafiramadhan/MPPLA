<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getKritikSaran(Request $request)
	{
		$kritik_saran = KritikSaran::get();

		return $kritik_saran;
	}
}
