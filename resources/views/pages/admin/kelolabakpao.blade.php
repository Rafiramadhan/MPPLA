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
                            <h1 class="module-title font-alt">Kelola Bakpao</h1>
                        </div>
                    </div>
                    <hr class="divider-w pt-20">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-border checkout-table">
                                <tbody>
                                <tr>
                                    <th class="hidden-xs">Barang</th>
                                    <th>Deskripsi</th>
                                    <th class="hidden-xs">Harga</th>
                                    <th class="hidden-xs">Stok</th>
                                    <th>Hapus</th>
                                </tr>
                                <form action="/tes/tambahtransaksi" method="post">
                                    @foreach($bakpaos as $bakpao)
                                        @csrf
                                        <tr>
                                            <td class="hidden-xs"><a href="#"><img src="{{$bakpao->path_gambar}}"
                                                                                   alt="Accessories Pack"/></a></td>
                                            <td>
                                                <h5 class="product-title font-alt">{{$bakpao->jenis_bakpao}}</h5>
                                            </td>
                                            <td class="hidden-xs">
                                                <h5 class="product-title font-alt">Rp.{{$bakpao->harga_bakpao}}</h5>
                                            </td>
                                            <td class="hidden-xs">
                                                <h5 class="product-title font-alt">{{$bakpao->stok_bakpao}}</h5>
                                            </td>
                                            <input type="hidden" name="bakpao_id[]" value="{{$bakpao->id}}">
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-round btn-b">Tambah Bakpao
                                        </button>
                                    </div>
                                </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{--<div id="popup">--}}
                        {{--<div data-role="main" class="ui-content">--}}
                            {{--<a href="#myPopup" data-rel="popup"--}}
                               {{--class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left">Show Popup--}}
                                {{--Form</a>--}}

                            {{--<div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">--}}
                                {{--<form method="post" action="/action_page_post.php">--}}
                                    {{--<div>--}}
                                        {{--<h3>Login information</h3>--}}
                                        {{--<label for="usrnm" class="ui-hidden-accessible">Username:</label>--}}
                                        {{--<input type="text" name="user" id="usrnm" placeholder="Username">--}}
                                        {{--<label for="pswd" class="ui-hidden-accessible">Password:</label>--}}
                                        {{--<input type="password" name="passw" id="pswd" placeholder="Password">--}}
                                        {{--<label for="log">Keep me logged in</label>--}}
                                        {{--<input type="checkbox" name="login" id="log" value="1" data-mini="true">--}}
                                        {{--<input type="submit" data-inline="true" value="Log in">--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
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
    <script>

        function calcu(bakpao, harga) {
            document.getElementById(bakpao).value = document.getElementById('B' + bakpao).value * harga;
            $(document.getElementById(bakpao)).manageCommas();
        }

        String.prototype.addComma = function () {
            return this.replace(/(.)(?=(.{3})+$)/g, "$1,")
        }

        $.fn.manageCommas = function () {
            return this.each(function () {
                $(this).val($(this).val().replace(/(,| )/g, '').addComma());
            })
        }

    </script>
@endsection