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
    public function index()
    {
        return view('index');
    }
    public function getHasilJual()
    {
        return view('hasiljual');
    }
    public function getIndex2()
    {
        return view('index2');
    }
    public function getIndex3()
    {
        return view('Index3');
    }
    public function getIndexAdministrator()
    {
        return view('index_administrator');
    }
    public function getIndexPenjual()
    {
        return view('index_penjual');
    }
    public function getKritikSaran()
    {
        return view('kritiksaran');
    }
    public function getLihatHasilJual()
    {
        return view('lihathasiljual');
    }
    public function getLihatKritik()
    {
        return view('lihatkritik');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function getPemesanan()
    {
        return view('pemesanan');
    }
    public function getPenjualan()
    {
        return view('penjualan');
    }
    public function getTentang()
    {
        return view('tentang');
    }
}
