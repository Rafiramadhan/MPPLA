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
		//dd($request->jumlah);

		$pemesanan = Pemesanan::create([
            'user_id' => $request['user_id'],
            'status' => 0,
            'total_harga' => $request['total_harga']
        ]);

        

        foreach ($request->bakpao_id as $key => $bakpao) {
        	# 
        	if($request->jumlah[$key] == null) continue;
        	$data = [
				"bakpao_id" => $request->bakpao_id[$key],
				"jumlah" => $request->jumlah[$key],
				"pemesanan_id" => $pemesanan->id,
				];

			$item_transaksi[] = $data;
			$transaksi = ItemPemesanan::create($data);
			$bakpao = Bakpao::find($request->bakpao_id[$key]);
			$bakpao->stok_bakpao -= $request->jumlah[$key];
			$bakpao->save();
        }

		return $pemesanan;

		//return ItemPemesanan::create($item_transaksi);
	}

	public function declineTransaction(Request $request)
	{
		$pemesanan = Pemesanan::find($request->pemesanan_id);
		$pemesanan->status = 3;

		foreach($pemesanan->item_pemesanan as $item)
		{
			$bakpao = Bakpao::find($item->bakpao_id);
			$bakpao->stok_bakpao += $item->jumlah;
			$bakpao->save(); 
		}
		$pemesanan->save();

		dd("success");
	}

	public function verifTransaction(Request $request)
	{
		$pemesanan = Pemesanan::find($request->pemesanan_id);
		$pemesanan->status = 1;
		$pemesanan->save();
		dd("success");
	}

	public function getUserHistoryTransaction(Request $request)
	{
		$pemesanan = Pemesanan::where('user_id', '=', $request['user_id'])->get();
		dd($pemesanan->item_pemesanan);
	}



}
