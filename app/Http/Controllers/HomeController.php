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

    }
    public function getIndexAdministrator()
    {
        if(\Auth::user()->role== 'admin') 
        return view('pages.admin.index3');

        return view('pages.penjual.index_penjual');
    }
    public function getLihatHasilJual()
    {
        return view('pages.admin.lihathasiljual');
    }
    public function getTambahBakpao()
    {
        return view('pages.admin.tambahbakpao');
    }
    public function getLihatKritik()
    {
        return view('pages.admin.lihatkritik');
    }
    public function getVerifPenjual()
    {
        return view('pages.admin.verifpenjual');
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
