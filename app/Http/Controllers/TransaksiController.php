<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bakpao;
use App\Pemesanan;
use App\ItemPemesanan;

class TransaksiController extends Controller
{
    //
	public function addTransaction(Request $request)
	{
		$transaksi = Pemesanan::create([
            'user_id' => $request['user_id'],
            'status' => 0,
            'total_harga' => $request['total_harga']
        ]);


		for($key = 0; $key< $request->item; $key++){
			$data = [
				"bakpao_id" => $request->bakpao_id[$key],
				"jumlah" => $request->jumlah[$key],
				"pemesanan_id" => $transaksi->id,
				];
			$item_transaksi[] = $data;
			$transaksi = ItemPemesanan::create($data);
		}

		return $transaksi;

		//return ItemPemesanan::create($item_transaksi);
	}


}
