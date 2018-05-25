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
        <div class="main">
            <section class="module bg-dark-30 about-page-header"
                     data-background="{{ asset('assets/images/restaurant/megajaya1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h1 class="module-title font-alt mb-0">Ganti Biodata Penjual</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <hr class="divider-w mt-10 mb-20">
                            <form action="/editpenjual" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <input type="hidden" name="id" value="{{$penjual->id}}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" name="nama" type="text"
                                   placeholder="Jenis Bakpao" value="{{$penjual->nama}}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="kontak" placeholder="Harga Bakpao" value="{{$penjual->kontak}}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-sm" name="email" type="text"
                                           placeholder="Stok Bakpao" value="{{$penjual->email}}"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-round btn-b">Edit</button>
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