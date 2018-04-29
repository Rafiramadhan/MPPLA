<?php

namespace App\Http\Controllers;

use App\bakpao;
use Illuminate\Http\Request;

class BakpaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bakpao  $bakpao
     * @return \Illuminate\Http\Response
     */
    public function show(bakpao $bakpao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bakpao  $bakpao
     * @return \Illuminate\Http\Response
     */
    public function edit(bakpao $bakpao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bakpao  $bakpao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bakpao $bakpao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bakpao  $bakpao
     * @return \Illuminate\Http\Response
     */
    public function destroy(bakpao $bakpao)
    {
        //
    }


    public function buatbakpao(Request $request)
    {
      $data = array();
      $status = 200;
      $message = "Success";



      if (bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->count() < 0 )
      {

        $bakpao = bakpao::create([
          'jenis_bakpao' => $request['jenis_bakpao'],
          'harga_bakpao' => $request['harga_bakpao'],
          'stok_bakpao' => $request['stok_bakpao']
        ]);
      }
      else {
        $status = 201;
        $message = "sudah ada jenis ini";
      }


      $data = array(
        'data'=>null,
        'status_code'=>$status,
        'message'=>$message);



      return  \Response::json($data, $status);
    }

    public function listBakpao(Request $request)
    {
      $data = array();
      $status = 200;
      $message = "Success";


      $bakpao = bakpao::get();

      return  \Response::json($bakpao, 200);
    }

    public function perbaruiBakpao(Request $request)
    {
      $data = array();
      $status = 200;
      $message = "Success";



      if (bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->count() > 0 )
      {

        $bakpao = bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->update([
          'harga_bakpao' => $request['harga_bakpao'],
          'stok_bakpao' => $request['stok_bakpao']
        ]);
      }
      else {
        $status = 201;
        $message = "bakpao tidak ditemukan";
      }
      $data = array(
        'data'=>null,
        'status_code'=>$status,
        'message'=>$message);



      return  \Response::json($data, $status);
    }

    public function hapus(Request $request)
    {
      $data = array();
      $status = 200;
      $message = "Success";
      if (bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->count() > 0 )
      {

        $bakpao = bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->delete();
      }
      else {
        $status = 201;
        $message = "bakpao tidak ditemukan";
      }
      $data = array(
        'data'=>null,
        'status_code'=>$status,
        'message'=>$message);
      return  \Response::json($data, $status);
    }

    public function ambilBakpao(Request $request)
    {
      $data = array();
      $status = 200;
      $message = "Success";
      if (bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->count() > 0 )
      {

        $bakpao = bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->get();
        $ubah = bakpao::where('jenis_bakpao', '=', $request['jenis_bakpao'])->update([
          'stok_bakpao' => $bakpao->stok_bakpao - $request['jumlah']
        ]);
      }
      else {
        $status = 201;
        $message = "bakpao tidak ditemukan";
      }
      $data = array(
        'data'=>null,
        'status_code'=>$status,
        'message'=>$message);
      return  \Response::json($data, $status);
    }

}
