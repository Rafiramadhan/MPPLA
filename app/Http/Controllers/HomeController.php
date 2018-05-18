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
        return view('pages.admin.index3');
    }
    public function getIndexAdministrator()
    {
        return view('pages.admin.index_administrator');
    }
    public function getLihatHasilJual()
    {
        return view('pages.admin.lihathasiljual');
    }
    public function getLihatKritik()
    {
        return view('pages.admin.lihatkritik');
    }

    //Penjual

    public function getTempPemesanan()
    {
        return view('pages.penjual.temppemesanan');
    }
    public function getHasilJual()
    {
        return view('pages.penjual.hasiljual');
    }
    public function getIndex2()
    {
        return view('pages.penjual.index2');
    }
    public function getIndexPenjual()
    {
        return view('pages.penjual.index_penjual');
    }
    public function getKritikSaran()
    {
        return view('pages.penjual.kritiksaran');
    }
    public function getPemesanan()
    {
        return view('pages.penjual.pemesanan');
    }
    public function getPenjualan()
    {
        return view('pages.penjual.penjualan');
    }
}
