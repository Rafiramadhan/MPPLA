<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bakpao;

class BakpaoController extends Controller
{
    //

    public function createBakpao(Request $request)
    {


        $foto = $request['path_gambar'];
        $path = $foto->getClientOriginalName();
        //dd($path);
        $foto->move('assets/images/shop', $foto->getClientOriginalName());

        if (Bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->count() > 0) {
            $data = array(
                'data' => null,
                'status_code' => 202,
                'message' => "Bakpao telah ada");

        } else {

            $bakpao = Bakpao::create([
                'path_gambar' => $path,
                'jenis_bakpao' => $request['jenis_bakpao'],
                'harga_bakpao' => $request['harga_bakpao'],   
                'stok_bakpao' => $request['stok_bakpao']
            ]);
            $data = array(
                'data' => null,
                'status_code' => 202,
                'message' => "Bakpao berhasil dibuat");
        }
        return redirect('kelolabakpao');
//        return \Response::json($data, 202);

    }

    public function editBakpao(Request $request)
    {
//        dd($request["jenis_bakpao"]);

        if (Bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->count() < 0) {
            $data = array(
                'data' => null,
                'status_code' => 202,
                'message' => "Bakpao tidak ditemukan");

        } else {
            $bakpao = Bakpao::find($request['id']);
            if($request['jenis_bakpao'] != null) $bakpao->jenis_bakpao = $request['jenis_bakpao'];
            if($request['harga_bakpao'] != null) $bakpao->harga_bakpao = $request['harga_bakpao'];
            if($request['path_gambar'] != null) $bakpao->path_gambar = $request['path_gambar'];
            if($request['stok_bakpao'] != null) $bakpao->stok_bakpao = $request['stok_bakpao'];
            $bakpao->save();
        }
        
         return redirect('kelolabakpao');
    }

    public function getSpecificBakpao($id)
    {
        $bakpao = Bakpao::find($id);
        $data = [
            'bakpaos' => $bakpao
        ];
        //masukin nama bladenya

        return view('pages.admin.editbakpao', $data);
        
    }

    public function getBakpao(Request $request)
    {
        $bakpaos = Bakpao::get();
        $data = [
            'bakpaos' => $bakpaos
        ];
        if(\Auth::user()->role== 'admin')
            return view('pages.admin.kelolabakpao', $data);
        else
            return view('pages.penjual.pemesanan', $data);
    }

    public function deleteBakpao($id)
    {

        $bakpao = Bakpao::where('id', '=', $id)->delete();
        $data = array(
            'data' => null,
            'status_code' => 202,
            'message' => "telah dihapus");

        return Redirect('kelolabakpao');
        return \Response::json($data, 202);
    }

}
