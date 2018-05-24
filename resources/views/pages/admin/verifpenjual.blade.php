@extends('layouts.main')

@section('title', 'Verifikasi')

@section('styles')
    @parent
@endsection

@section('content')
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                            data-target="#custom-collapse"><span
                                class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="/indexpenjual">Mega Jaya</a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#totop">Home</a></li>
                        <li><a href="/indexadmin">Produk</a></li>
                        <li><a href="/">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h1 class="module-title font-alt">Verifikasi Penjual</h1>
                        </div>
                    </div>
                    <hr class="divider-w pt-20">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-border checkout-table">
                                <tbody>
                                <tr>
                                    <th>Email</th>
                                    <th>Kontak</th>
                                    <th>Nama</th>
                                    <th>Nama Bakpao</th>
                                    <th>Jumlah</th>
                                    <th>Verifikasi</th>
                                </tr>
                                @foreach($pemesanans as $item)
                                    <form method="post">
                                        <tr>
                                            <td width="20%">
                                                <a class="block product-title font-alt">{{$item->user->email}}</a>
                                            </td>
                                            <td width="10%" class="hidden-xs">
                                                <h5 class="product-title font-alt">{{$item->user->kontak}}</h5>
                                            </td>
                                            <td width="25%" class="hidden-xs">
                                                <h5 class="product-title font-alt">{{$item->user->nama}}</h5>
                                            </td>
                                            <td>
                                                <h5 class="product-tittle font-alt">
                                                    @foreach($item->item_pemesanan as $pesanan)
                                                        {{$pesanan->bakpao->jenis_bakpao}}
                                                        <br>
                                                    @endforeach

                                                </h5>
                                            </td>
                                            <td class="hidden-xs">
                                                <h5 class="product-tittle font-alt">
                                                    @foreach($item->item_pemesanan as $pesanan)
                                                        {{$pesanan->jumlah}}
                                                        <br>
                                                    @endforeach

                                                </h5>
                                            </td>
                                            <td class="hidden-xs" style="justify-items: center">
                                                <button><a href="tesverified/{{$item->id}}">
                                                        Verifikasi </a></button>
                                                <button><a href="tesrejected/{{$item->id}}">
                                                        Tolak </a></button>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <div class="module-small bg-dark">
            </div>
            <hr class="divider-d">
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
@endsection

@section('scripts')
    @parent
@endsection