@extends('layouts.main')

@section('title', 'Bakpao Kita')

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
                    <a class="navbar-brand" href="/index2">Mega Jaya</a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#totop">Home</a></li>
                        <li><a href="/indexpenjual">Produk</a></li>
                        <li><a href="/">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
        <section class="module bg-dark-30 about-page-header"
                 data-background="assets/images/restaurant/megajaya1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt mb-0">Tambah Varian Bakpao Baru</h1>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <hr class="divider-w mt-10 mb-20">
                        <form action="/tes/tambahbakpao" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input class="form-control input-lg" name="jenis_bakpao" type="text"
                                       placeholder="Jenis Bakpao"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="harga_bakpao" placeholder="Harga Bakpao"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-sm" name="stok_bakpao" type="text"
                                       placeholder="Stok Bakpao"/>
                            </div>
                            <div>
                                <input class="form-control input-sm" name="path_gambar" type="file" name="pic"
                                       accept="image/*"
                                       placeholder="Gambar Bakpao">
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-round btn-b">Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <br>
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