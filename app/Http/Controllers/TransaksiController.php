<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bakpao;
use App\Pemesanan;
use App\User;
use App\ItemPemesanan;
use App\UserDetail;
use Auth;


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
        	if($request->jumlah[$key] == 0) continue;
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

		return Redirect('indexadmin');

		//return ItemPemesanan::create($item_transaksi);
	}

	public function getNotVerifiedTransaction()
	{
		// $pemesanans = ItemPemesanan::whereHas('pemesanan',function ($q){
		// 				   $q->where('status', '0');
		// 				})->get();

		$pemesanans = Pemesanan::where('status', '0')->get();


		$data = [
            'pemesanans' => $pemesanans
        ];
        return view('pages.admin.verifpenjual', $data);
	}



	public function declineTransaction($id)
	{
		$pemesanan = Pemesanan::find($id);
		$pemesanan->status = 3;

		foreach($pemesanan->item_pemesanan as $item)
		{
			$bakpao = Bakpao::find($item->bakpao_id);
			$bakpao->stok_bakpao += $item->jumlah;
			$bakpao->save(); 
		}
		$pemesanan->save();

		return Redirect('verifpenjual');
	}

	public function verifTransaction($id)
	{
		$pemesanan = Pemesanan::find($id);
		$pemesanan->status = 1;
		$pemesanan->save();

		$total_bakpao = 0;
		foreach ($pemesanan->item_pemesanan as $item) {
			$total_bakpao += $item->jumlah;
		}

		$pajak = $total_bakpao * 500;
	
		$user = UserDetail::where('user_id',$pemesanan->user_id)->first();

		$user->penghasilan_kotor += $pemesanan->total_harga;
		$user->penghasilan_bersih += ($user->penghasilan_kotor - $pajak);
		$user->save();
		
		return Redirect('verifpenjual');
	}

	public function getUserHistoryTransaction()
	{
		$pemesanan = Pemesanan::where('user_id', '=', Auth::User()->id)->get();
		dd($pemesanan);
	}

	



}
