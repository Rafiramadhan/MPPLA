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
                    <a class="navbar-brand" href="/indexpenjual">Mega Jaya</a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#totop">Home</a></li>
                        .
                        <li><a href="/indexpenjual">Produk</a></li>
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
                            <h1 class="module-title font-alt">Kelola Penjual</h1>
                        </div>
                    </div>
                    <hr class="divider-w pt-20">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-border checkout-table">
                                <tbody>
                                <tr>
                                    <th class="hidden-xs">Nama</th>
                                    <th>Kontak</th>
                                    <th class="hidden-xs">Email</th>
                                    <th class="hidden-xs">Edit</th>
                                </tr>
                                <form action="/tes/tambahpenjual" method="post">
                                    @foreach($user as $penjual)
                                        @csrf
                                        <tr>
                                            <td width="15%">
                                                <h5 class="product-title font-alt"><a href="formeditpenjual/{{$penjual->id}}">{{$penjual->nama}}</a></h5>
                                            </td>
                                            <td class="hidden-xs">
                                                <h5 class="product-title font-alt">+62{{$penjual->kontak}}</h5>
                                            </td>
                                            <td class="hidden-xs">
                                                <h5 class="product-title font-alt">{{$penjual->email}}</h5>
                                            </td>
                                            <td>
                                                <button class="btn-border-w"><a href="/formeditpenjual/{{$penjual->id}}"/>Edit</button>
                                            </td>
                                            <input type="hidden" name="bakpao_id[]" value="{{$penjual->id}}">
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        </tr>
                                    @endforeach
                                </form>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-round btn-b"><a href="/tambahbakpao" style="color:white">Tambah Bakpao</a>
                                    </button>
                                </div>

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