@extends('layouts.main')

@section('title', 'Pesan Sekarang!')

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
                            <h1 class="module-title font-alt">Pemesanan</h1>
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
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Hapus</th>
                                </tr>
                                @foreach($bakpaos as $bakpao)
                                    <form name="{{$bakpao->jenis_bakpao}}">
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
                                            <td>
                                                <input class="form-control" type="number" max="{{$bakpao->stok_bakpao}}" name="{{$bakpao->jenis_bakpao}}"
                                                       onFocus="startCalc();" onBlur="stopCalc();"/>
                                            </td>
                                            <td>
                                                Rp.<input readonly class="currency" type=text value='' name="harga"
                                                          readonly
                                                          style="text:bold">
                                            </td>
                                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr class="divider-w">
                    <div class="row mt-70">
                        <div class="col-sm-5 col-sm-offset-7">
                            <div class="shop-Cart-totalbox">
                                <h4 class="font-alt">Total</h4>
                                <form name="checkout">
                                    <table class="table table-striped table-border checkout-table">
                                        <tbody>
                                        <tr>
                                            <th>Subtotal :</th>
                                            <td>Rp.<input readonly class="currency" name="harga" readonly
                                                          style="text:bold"></td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Admin :</th>
                                            <td>Rp.1000</td>
                                        </tr>
                                        <tr class="shop-Cart-totalprice">
                                            <th>Total :</th>
                                            <td>Rp.<input readonly class="currency" name="hargaf" readonly
                                                          style="text:bold"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <button onclick="myFunction()" class="btn btn-lg btn-block btn-round btn-d"
                                        type="submit">
                                    Submit
                                </button>
                            </div>
                            <script>
                                function myFunction() {
                                    alert("Pemesanan Berhasil!\nTotal belanja :" + document.checkout.hargaf.value);
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </section>
            <div class="module-small bg-dark">
            </div>
            <hr class="divider-d">
            <footer class="footer bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="copyright font-alt">&copy; 2018&nbsp;<a href="/">MEGA JAYA</a></p>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a
                                        href="#"><i
                                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                        href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
@endsection

@section('scripts')
    @parent
    <script>
        function startCalc() {
            interval = setInterval("calc()", 1);
        }

        function calc() {
            bpkeju = document.Keju.Keju.value;
            document.Keju.harga.value = (bpkeju * 3100);

            bpkh = document.Kacang_Hijau.Kacang_Hijau.value;
            document.Kacang_Hijau.harga.value = (bpkh * 3000);

            bpkt = document.Kacang_Tanah.Kacang_Tanah.value;
            document.Kacang_Tanah.harga.value = (bpkt * 3000);

            bpayam = document.Ayam.Ayam.value;
            document.Ayam.harga.value = (bpayam * 3500);

            bpcoklat = document.Coklat.Coklat.value;
            document.Coklat.harga.value = (bpcoklat * 3100);

            bpstraw = document.Strawberry.Strawberry.value;
            document.Strawberry.harga.value = (bpstraw * 3100);

            bptelo = document.Telo.Telo.value;
            document.Telo.harga.value = (bptelo * 3000);

            bplapa = document.Kelapa.Kelapa.value;
            document.Kelapa.harga.value = (bplapa * 3000);

            total = (bpkeju * 3100) + (bpkh * 3000) + (bpkt * 3000) + (bpayam * 3500) + (bpcoklat * 3100) + (bpstraw * 3100) + (bptelo * 3000) + (bplapa * 3000);
            document.checkout.harga.value = total;
            document.checkout.hargaf.value = (total + 1000);
        }

        function stopCalc() {
            clearInterval(interval);
        }
    </script>
    <script>
        $(document).ready(function () {
            //apply on typing and focus
            $('input.currency').on('focus', function () {
                $(this).manageCommas();
            });
            //then sanatize on leave
            // if sanitizing needed on form submission time,
            //then comment beloc function here and call in in form submit function.
            // $('input.currency').on('focus', function () {
            //     $(this).santizeCommas();
            // });
        });

        String.prototype.addComma = function () {
            return this.replace(/(.)(?=(.{3})+$)/g, "$1,")
        }
        //Jquery global extension method
        $.fn.manageCommas = function () {
            return this.each(function () {
                $(this).val($(this).val().replace(/(,| )/g, '').addComma());
            })
        }

        $.fn.santizeCommas = function () {
            return $(this).val($(this).val().replace(/(,| )/g, ''));
        }
    </script>
@endsection