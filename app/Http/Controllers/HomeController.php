<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    //Umum
    public function index()
    {
        return view('index');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function getTentang()
    {
        return view('tentang');
    }

    //Admin

    public function getIndex3()
    {
        return view('admin.index3');
    }
    public function getIndexAdministrator()
    {
        return view('admin.index_administrator');
    }
    public function getLihatHasilJual()
    {
        return view('admin.lihathasiljual');
    }
    public function getLihatKritik()
    {
        return view('admin.lihatkritik');
    }

    //Penjual

    public function getTempPemesanan()
    {
        return view('penjual.temppemesanan');
    }
    public function getHasilJual()
    {
        return view('penjual.hasiljual');
    }
    public function getIndex2()
    {
        return view('penjual.index2');
    }
    public function getIndexPenjual()
    {
        return view('penjual.index_penjual');
    }
    public function getKritikSaran()
    {
        return view('penjual.kritiksaran');
    }
    public function getPemesanan()
    {
        return view('penjual.pemesanan');
    }
    public function getPenjualan()
    {
        return view('penjual.penjualan');
    }
}
