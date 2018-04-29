<?php

namespace App\Http\Controllers;

use App\Kritiksaran;
use Illuminate\Http\Request;

class KritiksaranController extends Controller
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
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function show(Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kritiksaran $kritiksaran)
    {
        //
    }


    public function addKritik(Request $request)
    {
      $data = array();
      $status = 200;
      $message = "Success";


        $kritik = Kritiksaran::create([
          'id_user' => $request['id_user'],
          'kritik' => $request['kritik'],
          'saran' => $request['saran']
        ]);

        $data = array(
          'data'=>null,
          'status_code'=>$status,
          'message'=>$message);



      return  \Response::json($data, $status);
    }

    public function showKritik(Request $request)
    {
      $kritik = Kritiksaran::get();

      return  \Response::json($kritik, 200);
    }


}
